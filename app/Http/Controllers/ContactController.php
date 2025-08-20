<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactConfirmation;
use App\Mail\ContactNotification;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        $isRtl = in_array(app()->getLocale(), ['ar', 'fa', 'ur']); // Add RTL languages as needed
        $textAlign = $isRtl ? 'text-right' : 'text-left';
        $marginRight = $isRtl ? 'ml-2' : 'mr-2';
        $flexReverse = $isRtl ? 'flex-row-reverse' : '';
        $spaceReverse = $isRtl ? 'space-x-reverse' : '';
        $borderLeft = $isRtl ? 'border-r-4' : 'border-l-4';

        return view('contact', compact(
            'isRtl',
            'textAlign',
            'marginRight',
            'flexReverse',
            'spaceReverse',
            'borderLeft'
        ));
    }

    public function submit(ContactFormRequest $request)
    {
        try {
            $contactData = $request->validated();
            $isRtl = in_array(app()->getLocale(), ['ar', 'fa', 'ur']);

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
