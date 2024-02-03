<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MailList;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class MailListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.mailingList.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:mail_lists',
        ]);

        MailList::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'status' => 1,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Mail listesinden başarıyla eklendi!",
            'alert-type' => 'danger'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function editModal(string $id)
    {
        $job = MailList::find($id);
        return response()->json([
            'status' => 200,
            'job' => $job
        ]);
    }

    public function updateModal(Request $request)
    {
        /*$request->validate([
            'email' => "required|email|unique:mail_lists,email,$request->job_id",
        ]);*/
        MailList::where('id', $request->job_id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Mail listesi başarıyla Düzenlendi!",
            'alert-type' => 'success'
        );
        return redirect()->route('mailingUsers.index')->with($notification);
    }


    public function delete($id)
    {
        MailList::where('id', $id)->delete();

        $notification = array(
            'message' => "Mail listesinden başarıyla silindi!",
            'alert-type' => 'danger'
        );

        return redirect()->back()->with($notification);
    }

    public function bulk()
    {
        return view('admin.users.mailingList.bulk');
    }

    public function bulkNews()
    {
        $total_mail = MailList::where('status', 1)->count();
        return view('admin.users.mailingList.bulkNews', compact('total_mail'));
    }

    public function changeStatus($id, $status)
    {
        MailList::where('id', $id)->update(['status' => $status]);
    }

    public function getNewsData($id)
    {
        $data = News::where('id', $id)->first();
        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }

    public function GetMailList()
    {
        if (\request()->ajax()) {
            return datatables()->of(MailList::select('mail_lists.*'))
                ->make(true);
        } else {
            return false;
        }
    }
}
