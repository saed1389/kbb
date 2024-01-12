<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class EventCategoryController extends Controller
{
    public function index()
    {
        $events = EventCategory::orderBy('id', 'desc')->get();
        return view('admin.event_category.index', compact('events'));
    }
    public function store(Request $request)
    {
        EventCategory::create([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'order' => 0,
            'status' => 1,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Etkinlik kategorisi başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('event-categories.index')->with($notification);
    }

    public function editModal(string $id)
    {
        $title = EventCategory::find($id);
        return response()->json([
            'status' => 200,
            'title' => $title
        ]);
    }

    public function updateModal(Request $request)
    {
        EventCategory::where('id', $request->title_id)->update([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Etkinlik kategorisi başarıyla düzenlendi!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function delete($id)
    {
        EventCategory::where('id', $id)->delete();
        $notification = array(
            'message' => "Etkinlik kategorisi başarıyla silindi!",
            'alert-type' => 'danger'
        );

        return redirect()->back()->with($notification);
    }

    public function changeStatus($id, $status)
    {
        EventCategory::where('id', $id)->update(['status' => $status]);
    }
}
