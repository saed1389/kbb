<?php

namespace App\Listeners;

use App\Events\EmailProgressUpdatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateBulkEmailProgress implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  EmailProgressUpdatedEvent  $event
     * @return void
     */
    public function handle(EmailProgressUpdatedEvent $event)
    {
        // Update your bulk email progress logic here
        // You can access the progress using $event->progress
        // For example, log the progress:
        \Log::info("Progress: {$event->progress}%");
    }
}
