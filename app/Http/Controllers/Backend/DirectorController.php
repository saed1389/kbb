<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class DirectorController extends Controller
{
    public function index()
    {
        $presidents = Director::orderBy('id', 'desc')->get();
        return view('admin.menus.directors.index', compact('presidents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $manger = new ImageManager(new Driver());
            $name_gen = Str::slug($request->full_name).'-'.hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img = $manger->read($request->file('image'));
            $img->toJpeg(80)->save(base_path('public/uploads/users/directors/'.$name_gen));
            $save_url = 'uploads/users/directors/'.$name_gen;
        } else {
            $save_url = '';
        }

        Director::create([
            'full_name' => $request->full_name,
            'position' => $request->position,
            'image' => $save_url,
            'sort_order' => 0,
            'status' => 1
        ]);

        $notification = array(
            'message' => "Yönetim kurulu başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $presidents = Director::orderBy('id', 'desc')->get();
        $president = Director::where('id', $id)->first();

        return view('admin.menus.directors.edit', compact('president', 'presidents'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $president = Director::where('id', $id)->first();
        @unlink($president->image);
        $president->delete();
        $notification = array(
            'message' => "Yönetim kurulu bilgileri başarıyla silindi!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function update(Request $request, string $id)
    {
        $president = Director::where('id', $id)->first();

        if ($request->file('image')) {
            $manger = new ImageManager(new Driver());
            $name_gen = Str::slug($request->full_name).'-'.hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img = $manger->read($request->file('image'));
            $img->toJpeg(80)->save(base_path('public/uploads/users/directors/'.$name_gen));
            $save_url = 'uploads/users/directors/'.$name_gen;
            @unlink($president->image);
        } else {
            $save_url = $president->image;
        }

        Director::where('id', $id)->update([
            'full_name' => $request->full_name,
            'position' => $request->position,
            'image' => $save_url,
        ]);

        $notification = array(
            'message' => "Yönetim kurulu başarıyla düzenlendi!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function changeStatus($id, $status)
    {
        Director::where('id', $id)->update(['status' => $status]);
    }
}
