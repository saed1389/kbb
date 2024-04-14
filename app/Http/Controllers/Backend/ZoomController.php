<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Zoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ZoomController extends Controller
{
    public function index()
    {
        $videos = Zoom::all();
        return view('admin.events.zoom.index', compact('videos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'start_time' => 'required',
            'zoom_link' => 'required',
        ]);

        Zoom::create([
            'title' => $request->title,
            'type' => $request->type,
            'start_time' => $request->start_time,
            'zoom_link' => $request->zoom_link,
            'status' => 1,
            'created_by' => Auth::user()->id
        ]);

        $notification = array(
            'message' => "Zoom/Webinar başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('zooms.index')->with($notification);
    }

    /**
     * Update the specified resource in storage.
     */
    public function editModal(string $id)
    {
        $title = Zoom::find($id);
        return response()->json([
            'status' => 200,
            'title' => $title
        ]);
    }

    public function updateModal(Request $request)
    {
        Zoom::where('id', $request->title_id)->update([
            'title' => $request->title,
            'type' => $request->type,
            'start_time' => $request->start_time,
            'zoom_link' => $request->zoom_link,
        ]);

        $notification = array(
            'message' => "Zoom/Webinar başarıyla düzenlendi!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        Zoom::where('id', $id)->delete();
        $notification = array(
            'message' => "Zoom/Webinar başarıyla silindi!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function changeStatus($id, $status)
    {
        Zoom::where('id', $id)->update(['status' => $status]);
    }
}
