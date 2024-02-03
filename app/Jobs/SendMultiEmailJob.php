<?php

namespace App\Jobs;

namespace App\Jobs;

use App\Models\EmailTracker;
use App\Models\MailList;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\BulkNewsMail;
use Illuminate\Support\Facades\Mail;

class SendMultiEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $emailAddress;
    /**
     * Create a new job instance.
     *
     * @param int $index
     */
    public function __construct($index)
    {
        // You might pass necessary parameters to the job constructor
        $this->emailAddress = MailList::where('status', 1)->pluck('email')->toArray()[$index];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Implement your logic to send the email
        $mail = new BulkNewsMail(request()->input('content'));
        Mail::to($this->emailAddress)->send($mail);

        // Increment the processed emails count in the database
        EmailTracker::first()->increment('processed_emails');

        // Simulate processing time if needed
        sleep(1);
    }
}
