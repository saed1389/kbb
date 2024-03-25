<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\Competence;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class UserCompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $competences = Competence::where('user_id', Auth::user()->id)->get();
        return view('user.competences.index', compact('competences'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'certificate' => 'file'
        ]);

        if ($request->hasFile('certificate')) {
            $path = 'uploads/users/certificate/';
            $fileName = $request->file('certificate')->getClientOriginalName();
            $request->file('certificate')->move($path, $fileName);
            $fileUrl = $path .$fileName;
        } else {
            $fileUrl = '';
        }

        Competence::create([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'location' => $request->location,
            'certificate' => $fileUrl,
            'point' => 0,
            'vote' => 0,
            'user_id' => Auth::user()->id,
        ]);

        $notification = array(
            'message' => "Yeterlik başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('userCompetences.index')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editModal(string $id)
    {
        $job = Competence::find($id);
        return response()->json([
            'status' => 200,
            'job' => $job
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateModal(Request $request)
    {
        if ($request->hasFile('certificate')) {
            $path = 'uploads/users/certificate/';
            $fileName = $request->file('certificate')->getClientOriginalName();
            $request->file('certificate')->move($path, $fileName);
            $fileUrl = $path .$fileName;
        } else {
            $fileUrl = $request->certificateOld;
        }

        Competence::where('id', $request->job_id)->update([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'location' => $request->location,
            'certificate' => $fileUrl,
            'point' => 0,
            'vote' => 0,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Yeterlik başarıyla Güncellendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('userCompetences.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $item =  Competence::where('id', $id)->first();
        @unlink($item->certificate);
        $item->delete();

        $notification = array(
            'message' => "Yeterlik başarıyla silindi!",
            'alert-type' => 'danger'
        );

        return redirect()->back()->with($notification);
    }

    public function list()
    {
        $competences = Competence::where('vote', 1)->paginate(20);
        return view('admin.competence.index', compact('competences'));
    }

    public function unconfirmedList()
    {
        $competences = Competence::where('vote', 0)->paginate(20);
        return view('admin.competence.list', compact('competences'));
    }

    public function point(Request $request)
    {
        Competence::where('id', $request->job_id)->update([
            'point' => $request->point,
            'vote' => 1,
        ]);

        $notification = array(
            'message' => "Pouan başarıyla Eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('unconfirmed-list')->with($notification);
    }
}
