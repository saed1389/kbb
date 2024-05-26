<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\PhotoCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = PhotoCategory::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('admin.photos.image.index', compact('galleries'));
    }

    public function add(Request $request)
    {
        $cat = PhotoCategory::where('id', $request->category)->first();
        if ($request->hasFile('file')) {

            $image = $request->file('file');
            $manager = new ImageManager(new Driver());

            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $watermarkPath = public_path('assets/img/tr-logo-n.png');

            $img->place($watermarkPath, 'top-left', 10, 10, 50);

            $img->save(base_path('public/uploads/photoGallery/'.$cat->title.'/'.$name_gen));

            $image_url = 'uploads/photoGallery/'.$cat->title.'/'.$name_gen;

            Image::create([
                'category' => $request->category,
                'image' => $image_url,
                'created_by' => Auth::user()->id,
                'status' => 1,
                'created_at' => Carbon::now()
            ]);
        }

        $notification = array(
            'message' => "Dosya başarıyla yüklendi!",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function delete($id)
    {
        $image = Image::find($id);
        @unlink($image->image);
        $image->delete();

        $notification = array(
            'message' => "Resim başarıyla silindi!",
            'alert-type' => 'danger'
        );
        return redirect()->back()->with($notification);
    }
}
