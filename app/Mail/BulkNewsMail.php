<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class BulkNewsMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $content;
    public $emailSubject; // Add this property for the subject
    /**
     * Create a new message instance.
     */
    public function __construct($content, $emailSubject)
    {
        $this->content = $content;
        $this->emailSubject = $emailSubject;

        $this->subject($this->emailSubject);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->emailSubject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.bulk',
        );
    }

    public function build()
    {
        return $this->subject($this->emailSubject)
            ->view('email.bulk') // Use any existing view file for now
            ->with(['content' => $this->content]);
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
