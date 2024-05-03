<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertisements = Advertisement::all();
        return view('admin.advertisements.index', compact('advertisements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'title.required' => 'Başlık gerekli',
            'image.required' => 'Resim gerekli',
            'image.mimes' => 'Resim Formatı Doğru Olmalı (jpeg,png,jpg,gif,svg)',
            'image.max' => 'Maksimum resim boyutu şu şekilde olmalıdır: 1Mb',
        ]);

        if ($request->status == 1) {
            $status = 1;
        } else {
            $status = 0;
        }

        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
        $img1 = $manager->read($request->file('image'));
        $img1R = $img1->scale(340, 500);
        $img1R->toJpeg(80)->save(base_path('public/uploads/advertisement/'.$name_gen));
        $save_url = 'uploads/advertisement/'.$name_gen;

        Advertisement::create([
            'title' => $request->title,
            'image' => $save_url,
            'href' => $request->href,
            'place' => $request->place,
            'status' => $status,
        ]);

        $notification = array(
            'message' => "Reklam başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('advertisements.index')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $advertisements = Advertisement::all();
        $ad = Advertisement::where('id', $id)->first();
        return view('admin.advertisements.edit', compact('advertisements', 'ad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'title.required' => 'Başlık gerekli',
            'image.mimes' => 'Resim Formatı Doğru Olmalı (jpeg,png,jpg,gif,svg)',
            'image.max' => 'Maksimum resim boyutu şu şekilde olmalıdır: 1Mb',
        ]);

        if ($request->status == 1) {
            $status = 1;
        } else {
            $status = 0;
        }

        if ($request->file('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img1 = $manager->read($request->file('image'));
            $img1R = $img1->scale(170, 250);
            $img1R->toJpeg(100)->save(base_path('public/uploads/advertisement/'.$name_gen));
            $save_url = 'uploads/advertisement/'.$name_gen;
        } else {
            $save_url = $request->oldImage;
        }


        Advertisement::where('id', $id)->update([
            'title' => $request->title,
            'image' => $save_url,
            'href' => $request->href,
            'place' => $request->place,
            'status' => $status,
        ]);

        $notification = array(
            'message' => "Reklam başarıyla güncellendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('advertisements.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $ad = Advertisement::where('id', $id)->first();
        @unlink($ad->image);
        $ad->delete();

        $notification = array(
            'message' => "Reklam başarıyla silindi!",
            'alert-type' => 'success'
        );

        return redirect()->route('advertisements.index')->with($notification);
    }

    public function changeStatus($id, string $status)
    {
        Advertisement::where('id', $id)->update(['status' => $status]);
    }
}
