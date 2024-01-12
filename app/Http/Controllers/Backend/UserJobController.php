<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\UserJob;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class UserJobController extends Controller
{
    public function index()
    {
        $jobs = UserJob::orderBy('id', 'desc')->get();
        return view('admin.users.job.index', compact('jobs'));
    }
    public function store(Request $request)
    {
        UserJob::create([
            'job' => $request->job,
            'job_en' => $request->job_en,
            'order' => 0,
            'status' => 1,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Meslek başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('jobs.index')->with($notification);
    }

    public function editModal(string $id)
    {
        $job = UserJob::find($id);
        return response()->json([
            'status' => 200,
            'job' => $job
        ]);
    }

    public function updateModal(Request $request)
    {
        UserJob::where('id', $request->job_id)->update([
            'job' => $request->job,
            'job_en' => $request->job_en,
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Meslek başarıyla Düzenlendi!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function delete($id)
    {
        UserJob::where('id', $id)->delete();
        $notification = array(
            'message' => "Meslek başarıyla silindi!",
            'alert-type' => 'danger'
        );

        return redirect()->back()->with($notification);
    }

    public function changeStatus($id, $status)
    {
        UserJob::where('id', $id)->update(['status' => $status]);
    }
}
