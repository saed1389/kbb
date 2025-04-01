<?php

namespace App\Jobs;

use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\BulkNewsMail;

class SendMultiEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, Batchable;

    protected $emails;
    protected $content;
    protected $subject;

    public function __construct($emails, $content, $subject)
    {
        $this->emails = $emails;
        $this->content = $content;
        $this->subject = $subject;
    }


    public function handle()
    {
        foreach ($this->emails as $email) { // ✅ Now, this property exists!
            // Stop execution if user clicked 'Durdur'
            if (Cache::get('email_sending_status') === 'stopped') {
                Log::info('✅ Email sending stopped by user.');
                return;
            }

            // Store currently sending email
            Cache::put('current_email', $email);
            Log::info('📩 Sending email to: ' . $email); // Debugging

            // Send email
            Mail::to($email)->send(new BulkNewsMail($this->content, $this->subject));

            // Update progress
            Cache::increment('sent_mails');
        }
    }

}
