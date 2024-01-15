<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MemberType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class MemberTypeController extends Controller
{
    public function index()
    {
        $members = MemberType::orderBy('id', 'desc')->get();
        return view('admin.member_type.index', compact('members'));
    }
    public function store(Request $request)
    {
        MemberType::create([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'order' => 0,
            'status' => 1,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Üye tipi başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('member-types.index')->with($notification);
    }

    public function editModal(string $id)
    {
        $title = MemberType::find($id);
        return response()->json([
            'status' => 200,
            'title' => $title
        ]);
    }

    public function updateModal(Request $request)
    {
        MemberType::where('id', $request->title_id)->update([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Üye tipi başarıyla düzenlendi!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function delete($id)
    {
        MemberType::where('id', $id)->delete();
        $notification = array(
            'message' => "Üye tipi başarıyla silindi!",
            'alert-type' => 'danger'
        );

        return redirect()->back()->with($notification);
    }

    public function changeStatus($id, $status)
    {
        MemberType::where('id', $id)->update(['status' => $status]);
    }
}
