<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $contactData;
    public $isRtl;

    public function __construct($contactData, $isRtl = false)
    {
        $this->contactData = $contactData;
        $this->isRtl = $isRtl;
    }

    public function build()
    {
        $subject = $this->isRtl
            ? 'رسالة تواصل جديدة: ' . $this->contactData['subject']
            : 'New Contact Message: ' . $this->contactData['subject'];

        return $this->subject($subject)
            ->view('emails.contact-notification')
            ->with([
                'data' => $this->contactData,
                'isRtl' => $this->isRtl
            ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
