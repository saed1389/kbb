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
        $galleries = PhotoCategory::where('status', 1)->get();
        return view('admin.photos.image.index', compact('galleries'));
    }

    public function add(Request $request)
    {

        if ($request->hasFile('file')) {

            /*$image = $request->file('file');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(360, 250);
            $img->toJpeg(80)->save(base_path('public/uploads/photoGallery/'.$name_gen));*/


            $file = $request->file('file');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/uploads/photoGallery/'), $fileName);
            $image_url = 'uploads/photoGallery/'.$fileName;

            Image::create([
                'category' => $request->category,
                'image' => $image_url,
                'created_by' => Auth::user()->id,
                'status' => 1,
                'created_at' => Carbon::now()
            ]);
        }

        // Add your logic to store the description and file details in the database or perform other actions
        $notification = array(
            'message' => "Dosya başarıyla yüklendi!",
            'alert-type' => 'success'
        );
        // Redirect or respond as needed
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
