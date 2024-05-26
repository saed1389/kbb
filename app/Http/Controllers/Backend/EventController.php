<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.events.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = EventCategory::where('status', 1)->get();
        return view('admin.events.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'event_body' => 'required',
        ],[
            'title.required' => 'Etkinlik Başlık gerekli',
            'event_body.required' => 'Etkinlik İçeriği gerekli',
        ]);

        if ($request->new_page) {
            $new_page = $request->new_page;
        } else {
            $new_page = 0;
        }

        Event::create([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'event_place' => $request->event_place,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'event_href' => $request->event_href,
            'new_page' => $new_page,
            'event_body' => $request->event_body,
            'event_body_en' => $request->event_body_en,
            'event_category' => $request->event_category,
            'show_website' => $request->show_website,
            'OnPermission' => $request->OnPermission,
            'status' => $request->status,
            'event_order' => 0,
            'created_by' => Auth::user()->id,
        ]);

        $notification = array(
            'message' => "Etkinlik başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('events.index')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::where('id', $id)->first();
        $categories = EventCategory::where('status', 1)->get();
        return view('admin.events.edit', compact('categories', 'event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'event_body' => 'required',
        ],[
            'title.required' => 'Etkinlik Başlık gerekli',
            'event_body.required' => 'Etkinlik İçeriği gerekli',
        ]);

        if ($request->new_page) {
            $new_page = $request->new_page;
        } else {
            $new_page = 0;
        }

        Event::where('id', $id)->update([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'event_place' => $request->event_place,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'event_href' => $request->event_href,
            'new_page' => $new_page,
            'event_body' => $request->event_body,
            'event_body_en' => $request->event_body_en,
            'event_category' => $request->event_category,
            'show_website' => $request->show_website,
            'OnPermission' => $request->OnPermission,
            'status' => $request->status,
            'event_order' => 0,
            'created_by' => Auth::user()->id,
        ]);

        $notification = array(
            'message' => "Etkinlik başarıyla güncellendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('events.index')->with($notification);
    }

    public function delete($id)
    {
        Event::where('id', $id)->delete();
        $notification = array(
            'message' => "Etkinlik başarıyla silindi!",
            'alert-type' => 'success'
        );

        return redirect()->route('events.index')->with($notification);
    }

    public function changeStatus($id, $status)
    {
        Event::where('id', $id)->update(['status' => $status]);
    }

    public function GetEvents ()
    {
        if (\request()->ajax()) {
            return datatables()->of(Event::with('eventCategory:id,title')
                ->select('events.id', 'events.title', 'events.event_category', 'events.event_place' , 'events.created_at', 'events.status'))
               /* ->where('events.status', 1)
                ->orderBy('events.id', 'DESC')*/
                ->make(true);

        } else {
            return false;
        }
    }
}
