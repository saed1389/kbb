<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Torlak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class TorlakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $torlaks = Torlak::paginate(50);
        return view('admin.photos.torlak.index', compact('torlaks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.photos.torlak.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        if ($request->file('image')){

            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img1 = $manager->read($request->file('image'));
            $img2 = $manager->read($request->file('image'));
            $img3 = $manager->read($request->file('image'));

            $imgSmall = $img2->scale(355, 124);
            $imgMid = $img3->scale(590, 204);

            $img1->toJpeg(80)->save(base_path('public/uploads/torlak/original/'.$name_gen));
            $imgMid->toJpeg(60)->save(base_path('public/uploads/torlak/mid/'.$name_gen));
            $imgSmall->toJpeg(80)->save(base_path('public/uploads/torlak/small/'.$name_gen));
            $save_url = $name_gen;
        } else {
            $save_url = '';
        }

        Torlak::create([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'slug' => Str::slug($request->title),
            'slug_en' => Str::slug($request->title_en),
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description,
            'description_en' => $request->description_en,
            'type' => $request->type,
            'video' => $request->video,
            'image' => $save_url,
            'OnPermission' => $request->OnPermission,
            'created_by' => Auth::user()->id,
            'hit' => 0,
            'status' => $request->status,
        ]);

        $notification = array(
            'message' => "Başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('torlak.index')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tor = Torlak::where('id', $id)->first();
        return view('admin.photos.torlak.edit', compact('tor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        if ($request->file('image')){

            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img1 = $manager->read($request->file('image'));
            $img2 = $manager->read($request->file('image'));
            $img3 = $manager->read($request->file('image'));

            $imgSmall = $img2->scale(355, 124);
            $imgMid = $img3->scale(590, 204);

            $img1->toJpeg(80)->save(base_path('public/uploads/torlak/original/'.$name_gen));
            $imgMid->toJpeg(60)->save(base_path('public/uploads/torlak/mid/'.$name_gen));
            $imgSmall->toJpeg(80)->save(base_path('public/uploads/torlak/small/'.$name_gen));
            $save_url = $name_gen;
        } else {
            $save_url = $request->oldImage;
        }

        Torlak::where('id', $id)->update([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'slug' => Str::slug($request->title),
            'slug_en' => Str::slug($request->title_en),
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description,
            'description_en' => $request->description_en,
            'type' => $request->type,
            'video' => $request->video,
            'image' => $save_url,
            'OnPermission' => $request->OnPermission,
            'status' => $request->status,
        ]);

        $notification = array(
            'message' => "Başarıyla düzenlendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('torlak.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $tor = Torlak::where('id', $id)->first();
        @unlink('uploads/torlak/original/'.$tor->image);
        @unlink('uploads/torlak/mid/'.$tor->image);
        @unlink('uploads/torlak/small/'.$tor->image);
        $tor->delete();

        $notification = array(
            'message' => "Başarıyla silindi!",
            'alert-type' => 'success'
        );

        return redirect()->route('torlak.index')->with($notification);
    }

    public function changeStatus($id, $status)
    {
        Torlak::where('id', $id)->update(['status' => $status]);
    }
}
