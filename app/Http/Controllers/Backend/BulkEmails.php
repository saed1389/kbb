<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\BulkNewsMail;
use App\Models\MailList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Swift_TransportException;

class BulkEmails extends Controller
{
    public function sendBulkNews(Request $request)
    {
        $customContent = $request->input('content');
        $emailSubject = "KBB Haber";
        try {
            $userEmails = MailList::where('status', 1)->pluck('email')->toArray();
            foreach ($userEmails as $emailAddress) {
                $mail = new BulkNewsMail($customContent, $emailSubject);
                Mail::to($emailAddress)->send($mail);
            }
            return response()->json(['message' => 'Emails sent successfully.']);
        } catch (Swift_TransportException $e) {
            return response()->json(['message' => 'Email could not be sent.'], 500);
        }
    }

    public function sendFlashNews(Request $request)
    {
        $customContent = $request->input('content');
        $emailSubject = "KBB Flash Haber";
        $memberList = $request->input('selectedMembers', []);
        $member = $request->input('member');

        if ($member == 0) {
            try {
                $userEmails = MailList::where('status', 1)->pluck('email')->toArray();
                foreach ($userEmails as $emailAddress) {
                    $mail = new BulkNewsMail($customContent, $emailSubject);
                    Mail::to($emailAddress)->send($mail);
                }
                return response()->json(['message' => 'Emails sent successfully.']);
            } catch (Swift_TransportException $e) {
                return response()->json(['message' => 'Email could not be sent.'], 500);
            }
        } elseif ($member == 1) {
            try {
                $userEmails = User::where('status', 1)->pluck('email')->toArray();
                foreach ($userEmails as $emailAddress) {
                    $mail = new BulkNewsMail($customContent, $emailSubject);
                    Mail::to($emailAddress)->send($mail);
                }
                return response()->json(['message' => 'Emails sent successfully.']);
            } catch (Swift_TransportException $e) {
                return response()->json(['message' => 'Email could not be sent.'], 500);
            }
        } elseif ($member == 2) {
            try {
                foreach ($memberList as $emailAddress) {
                    $user = User::find($emailAddress);
                    $mail = new BulkNewsMail($customContent, $emailSubject);
                    Mail::to($user->email)->send($mail);
                }
                return response()->json(['message' => 'Emails sent successfully.']);
            } catch (Swift_TransportException $e) {
                return response()->json(['message' => 'Email could not be sent.'], 500);
            }
        }
        return response()->json(['message' => 'Something was wrong']);
    }

    public function sendDeceaseNews(Request $request)
    {
        $customContent = $request->input('content');
        $emailSubject = "KBB Vefat Haberleri";
        $memberList = $request->input('selectedMembers', []);
        $member = $request->input('member');

        if ($member == 0) {
            try {
                $userEmails = MailList::where('status', 1)->pluck('email')->toArray();
                foreach ($userEmails as $emailAddress) {
                    $mail = new BulkNewsMail($customContent, $emailSubject);
                    Mail::to($emailAddress)->send($mail);
                }
                return response()->json(['message' => 'Emails sent successfully.']);
            } catch (Swift_TransportException $e) {
                return response()->json(['message' => 'Email could not be sent.'], 500);
            }
        } elseif ($member == 1) {
            try {
                $userEmails = User::where('status', 1)->pluck('email')->toArray();
                foreach ($userEmails as $emailAddress) {
                    $mail = new BulkNewsMail($customContent, $emailSubject);
                    Mail::to($emailAddress)->send($mail);
                }
                return response()->json(['message' => 'Emails sent successfully.']);
            } catch (Swift_TransportException $e) {
                return response()->json(['message' => 'Email could not be sent.'], 500);
            }
        } elseif ($member == 2) {
            try {
                foreach ($memberList as $emailAddress) {
                    $user = User::find($emailAddress);
                    $mail = new BulkNewsMail($customContent, $emailSubject);
                    Mail::to($user->email)->send($mail);
                }
                return response()->json(['message' => 'Emails sent successfully.']);
            } catch (Swift_TransportException $e) {
                return response()->json(['message' => 'Email could not be sent.'], 500);
            }
        }

    }

    public function sendEntryNews(Request $request)
    {
        $customContent = $request->input('content');
        $emailSubject = $request->input('subject');
        $member = $request->input('member');

        if ($member == 0) {
            try {
                $userEmails = MailList::where('status', 1)->pluck('email')->toArray();
                foreach ($userEmails as $emailAddress) {
                    $mail = new BulkNewsMail($customContent, $emailSubject);
                    Mail::to($emailAddress)->send($mail);
                }
                return response()->json(['message' => 'Emails sent successfully.']);
            } catch (Swift_TransportException $e) {
                return response()->json(['message' => 'Email could not be sent.'], 500);
            }
        } elseif ($member == 1) {
            try {
                $userEmails = User::where('status', 1)->pluck('email')->toArray();
                foreach ($userEmails as $emailAddress) {
                    $mail = new BulkNewsMail($customContent, $emailSubject);
                    Mail::to($emailAddress)->send($mail);
                }
                return response()->json(['message' => 'Emails sent successfully.']);
            } catch (Swift_TransportException $e) {
                return response()->json(['message' => 'Email could not be sent.'], 500);
            }
        }
        return response()->json(['message' => 'Something was wrong']);
    }
}
