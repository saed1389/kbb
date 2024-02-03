<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\BulkNewsMail;
use App\Models\EmailTracker;
use App\Models\MailList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendMultiEmailJob;
use Illuminate\Support\Facades\Route;
use Swift_TransportException;

class BulkEmails extends Controller
{
    public function sendBulkNews(Request $request)
    {
        $customContent = $request->input('content');
        try {
            $userEmails = MailList::where('status', 1)->pluck('email')->toArray();
            foreach ($userEmails as $emailAddress) {
                $mail = new BulkNewsMail($customContent);
                Mail::to($emailAddress)->send($mail);
            }
            return response()->json(['message' => 'Emails sent successfully.']);
        } catch (Swift_TransportException $e) {
            return response()->json(['message' => 'Email could not be sent.'], 500);
        }
    }
}
