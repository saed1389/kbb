<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\President;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PresidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presidents = President::orderBy('id', 'desc')->get();
        return view('admin.menus.presidents.index', compact('presidents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->current == 1) {
            $current = 1;
        } else {
            $current = 0;
        }

        if ($request->file('image')) {
            $manger = new ImageManager(new Driver());
            $name_gen = Str::slug($request->full_name).'-'.hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img = $manger->read($request->file('image'));
            $img->toJpeg(80)->save(base_path('public/uploads/users/presidents/'.$name_gen));
            $save_url = 'uploads/users/presidents/'.$name_gen;
        } else {
            $save_url = '';
        }

        President::create([
            'full_name' => $request->full_name,
            'year' => $request->year,
            'image' => $save_url,
            'current' => $current,
            'status' => 1
        ]);

        $notification = array(
            'message' => "Başkan başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $presidents = President::orderBy('id', 'desc')->get();
        $president = President::where('id', $id)->first();

        return view('admin.menus.presidents.edit', compact('president', 'presidents'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $president = President::where('id', $id)->first();
        @unlink($president->image);
        $president->delete();
        $notification = array(
            'message' => "Başkan bilgileri başarıyla silindi!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function update(Request $request, string $id)
    {
        $president = President::where('id', $id)->first();
        if ($request->current == 1) {
            $current = 1;
        } else {
            $current = 0;
        }

        if ($request->file('image')) {
            $manger = new ImageManager(new Driver());
            $name_gen = Str::slug($request->full_name).'-'.hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img = $manger->read($request->file('image'));
            $img->toJpeg(80)->save(base_path('public/uploads/users/presidents/'.$name_gen));
            $save_url = 'uploads/users/presidents/'.$name_gen;
            @unlink($president->image);
        } else {
            $save_url = $president->image;
        }

        President::where('id', $id)->update([
            'full_name' => $request->full_name,
            'year' => $request->year,
            'image' => $save_url,
            'current' => $current,
        ]);

        $notification = array(
            'message' => "Başkan bilgileri başarıyla düzenlendi!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function changeStatus($id, $status)
    {
        President::where('id', $id)->update(['status' => $status]);
    }
}
