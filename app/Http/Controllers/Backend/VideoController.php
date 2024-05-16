<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::all();
        return view('admin.photos.videos.index', compact('videos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'title_en' => 'nullable',
            'link' => 'required'
        ]);

        Video::create([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'link' => $request->link,
            'created_by' => Auth::user()->id
        ]);

        $notification = array(
            'message' => "Eğitim videosu başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('videos.index')->with($notification);
    }

    /**
     * Update the specified resource in storage.
     */
    public function editModal(string $id)
    {
        $title = Video::find($id);
        return response()->json([
            'status' => 200,
            'title' => $title
        ]);
    }

    public function updateModal(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'title_en' => 'nullable',
            'link' => 'required'
        ]);

        Video::where('id', $request->title_id)->update([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'link' => $request->link,
            'created_by' => Auth::user()->id
        ]);

        $notification = array(
            'message' => "Eğitim videosu başarıyla düzenlendi!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        Video::where('id', $id)->delete();
        $notification = array(
            'message' => "Eğitim videosu başarıyla silindi!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function changeStatus($id, $status)
    {
        Video::where('id', $id)->update(['status' => $status]);
    }
}
