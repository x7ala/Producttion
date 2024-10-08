<?php

namespace App\Mail;

use App\Models\ContactForm;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

     public $contactForm;

    public function __construct(ContactForm $contactForm)
    {
        //
        $this->contactForm = $contactForm;
    }

    public function build()
    {
        return $this->subject('Yeni İletişim Formu Gönderimi')
                    ->view('emails.contact_form_submitted');
    }


    /*

    // Get the message envelope.

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Form Submitted',
        );
    }

    // Get the message content definition.

    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    // Get the attachments for the message.
      @return array<int, \Illuminate\Mail\Mailables\Attachment>

    public function attachments(): array
    {
        return [];
    }

    */

}
