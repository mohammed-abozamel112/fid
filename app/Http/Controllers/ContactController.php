<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactConfirmation;
use App\Mail\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function submit(ContactFormRequest $request)
    {
        try {
            $contactData = $request->validated();
            $isRtl = in_array(app()->getLocale(), ['ar', 'en']);

            // Send confirmation email to the sender
            Mail::to($contactData['email'])->send(new ContactConfirmation($contactData, $isRtl));

            // Send notification email to yourself (admin)
            $adminEmail = config('mail.admin_email', 'admin@example.com');
            Mail::to($adminEmail)->send(new ContactNotification($contactData, $isRtl));

            return redirect()->back()->with(
                'success',
                $isRtl
                ? 'تم إرسال رسالتك بنجاح! سنقوم بالرد عليك قريباً.'
                : 'Your message has been sent successfully! We will get back to you soon.'
            );

        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());

            return redirect()->back()->with(
                'error',
                $isRtl
                ? 'حدث خطأ أثناء إرسال الرسالة. يرجى المحاولة مرة أخرى.'
                : 'An error occurred while sending your message. Please try again.'
            )->withInput();
        }
    }
}
