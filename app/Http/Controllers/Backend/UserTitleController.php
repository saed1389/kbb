<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\UserTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class UserTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titles = UserTitle::orderBy('id', 'desc')->get();
        return view('admin.users.title.index', compact('titles'));
    }
    public function store(Request $request)
    {
        UserTitle::create([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'order' => 0,
            'status' => 1,
            'created_by' => 1,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Ünvan başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('titles.index')->with($notification);
    }

    public function editModal(string $id)
    {
        $title = UserTitle::find($id);
        return response()->json([
            'status' => 200,
            'title' => $title
        ]);
    }

    public function updateModal(Request $request)
    {
        UserTitle::where('id', $request->title_id)->update([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Ünvan başarıyla Düzenlendi!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function delete($id)
    {
        UserTitle::where('id', $id)->delete();
        $notification = array(
            'message' => "Ünvan başarıyla silindi!",
            'alert-type' => 'danger'
        );

        return redirect()->back()->with($notification);
    }

    public function changeStatus($id, $status)
    {
        UserTitle::where('id', $id)->update(['status' => $status]);
    }
}
