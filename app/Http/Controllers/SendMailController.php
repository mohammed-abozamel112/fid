<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SendMailController extends Controller
{
    /**
     * Display the contact form
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Handle the contact form submission
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Prepare email data
        $emailData = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Send email to admin
        Mail::send('emails.contact', $emailData, function($message) use ($emailData) {
            $message->from($emailData['email'], $emailData['name']);
            $message->to('contact@fidcompany.com');
            $message->subject('Contact Form: ' . $emailData['subject']);
        });

        // Send confirmation email to user
        Mail::send('emails.confirmation', $emailData, function($message) use ($emailData) {
            $message->from('contact@fidcompany.com', 'FID Company');
            $message->to($emailData['email']);
            $message->subject('Thank you for contacting us');
        });

        return redirect()
            ->back()
            ->with('success', 'Thank you for your message! We\'ll get back to you within 24 hours.');
    }
}
