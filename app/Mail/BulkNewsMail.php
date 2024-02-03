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

    /**
     * Create a new message instance.
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Bulk News Mail',
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
        return $this->subject('Your Email Subject')
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
