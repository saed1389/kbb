<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Jobs\SendMultiEmailJob;
use App\Models\MailList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Cache;

class BulkEmails extends Controller
{
    public function sendBulkNews(Request $request)
    {
        $customContent = $request->input('content');
        $emailSubject = $request->input('subject');

        try {
            $userEmails = MailList::where('status', 1)->pluck('email')->toArray();
            $totalEmails = count($userEmails);

            Cache::put('total_mails', $totalEmails);
            Cache::put('sent_mails', 0);
            Cache::put('email_sending_status', 'running');

            $batch = [];

            foreach (array_chunk($userEmails, 100) as $emailChunk) {
                $batch[] = new SendMultiEmailJob($emailChunk, $customContent, $emailSubject);
            }

            Bus::batch($batch)->then(function () {
                Cache::put('email_sending_status', 'completed');
            })->dispatch();

            return response()->json(['message' => 'Emails are being sent in the background.']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function sendFlashNews(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'member' => 'required|integer',
        ]);

        $customContent = $request->input('content');
        $emailSubject = $request->input('subject');
        $member = $request->input('member');

        try {
            if ($member == 0) {
                $userEmails = MailList::where('status', 1)->pluck('email')->toArray();
            } elseif ($member == 1) {
                $userEmails = User::where('status', 1)->pluck('email')->toArray();
            } else {
                return response()->json(['message' => 'Invalid list selection.'], 400);
            }

            $totalEmails = count($userEmails);
            Cache::put('total_mails', $totalEmails);
            Cache::put('sent_mails', 0);
            Cache::put('email_sending_status', 'running');

            $batch = [];

            foreach (array_chunk($userEmails, 100) as $emailChunk) {
                $batch[] = new SendMultiEmailJob($emailChunk, $customContent, $emailSubject);
            }

            Bus::batch($batch)->then(function () {
                Cache::put('email_sending_status', 'completed');
            })->dispatch();

            return response()->json(['message' => 'Arka planda e-postalar gönderiliyor.']);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error sending emails: ' . $e->getMessage()], 500);
        }
    }

    public function sendDeceaseNews(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'member' => 'required|integer',
        ]);

        $customContent = $request->input('content');
        $emailSubject = $request->input('subject');
        $member = $request->input('member');

        try {
            if ($member == 0) {
                $userEmails = MailList::where('status', 1)->pluck('email')->toArray();
            } elseif ($member == 1) {
                $userEmails = User::where('status', 1)->pluck('email')->toArray();
            } else {
                return response()->json(['message' => 'Invalid list selection.'], 400);
            }

            $totalEmails = count($userEmails);
            Cache::put('total_mails', $totalEmails);
            Cache::put('sent_mails', 0);
            Cache::put('email_sending_status', 'running');

            $batch = [];

            foreach (array_chunk($userEmails, 100) as $emailChunk) {
                $batch[] = new SendMultiEmailJob($emailChunk, $customContent, $emailSubject);
            }

            Bus::batch($batch)->then(function () {
                Cache::put('email_sending_status', 'completed');
            })->dispatch();

            return response()->json(['message' => 'Arka planda e-postalar gönderiliyor.']);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error sending emails: ' . $e->getMessage()], 500);
        }

    }

    public function sendEntryNews(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'member' => 'required|integer',
        ]);

        $customContent = $request->input('content');
        $emailSubject = $request->input('subject');
        $member = $request->input('member');

        try {
            if ($member == 0) {
                $userEmails = MailList::where('status', 1)->pluck('email')->toArray();
            } elseif ($member == 1) {
                $userEmails = User::where('status', 1)->pluck('email')->toArray();
            } else {
                return response()->json(['message' => 'Invalid list selection.'], 400);
            }

            $totalEmails = count($userEmails);
            Cache::put('total_mails', $totalEmails);
            Cache::put('sent_mails', 0);
            Cache::put('email_sending_status', 'running');

            $batch = [];

            foreach (array_chunk($userEmails, 100) as $emailChunk) {
                $batch[] = new SendMultiEmailJob($emailChunk, $customContent, $emailSubject);
            }

            Bus::batch($batch)->then(function () {
                Cache::put('email_sending_status', 'completed');
            })->dispatch();

            return response()->json(['message' => 'Arka planda e-postalar gönderiliyor.']);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error sending emails: ' . $e->getMessage()], 500);
        }
    }
}
