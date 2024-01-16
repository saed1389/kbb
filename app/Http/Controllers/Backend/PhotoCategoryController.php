<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\PhotoCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PhotoCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = PhotoCategory::orderBy('id', 'desc')->get();
        return view('admin.photos.gallery.index', compact('photos'));
    }
    public function store(Request $request)
    {
        PhotoCategory::create([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'order' => 0,
            'status' => 1,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Fotoğraf galerisi başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('galleries.index')->with($notification);
    }

    public function show($id)
    {
        $photos = Image::where('category', $id)->get();
        $gallery = PhotoCategory::where('id', $id)->first();
        return view('admin.photos.gallery.show', compact('photos', 'gallery'));
    }
    public function editModal(string $id)
    {
        $title = PhotoCategory::find($id);
        return response()->json([
            'status' => 200,
            'title' => $title
        ]);
    }

    public function updateModal(Request $request)
    {
        PhotoCategory::where('id', $request->title_id)->update([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Fotoğraf galerisi başarıyla düzenlendi!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function delete($id)
    {
        PhotoCategory::where('id', $id)->delete();
        $notification = array(
            'message' => "Fotoğraf galerisi başarıyla silindi!",
            'alert-type' => 'danger'
        );

        return redirect()->back()->with($notification);
    }

    public function changeStatus($id, $status)
    {
        PhotoCategory::where('id', $id)->update(['status' => $status]);
    }
}
