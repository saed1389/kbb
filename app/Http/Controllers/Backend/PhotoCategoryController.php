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
        $photoCategory =  PhotoCategory::create([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'order' => 0,
            'status' => 1,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        // Create folder
        $folderPath = public_path('uploads/photoGallery/' . $photoCategory->title); // Assuming 'photos' is the folder where you want to create subfolders
        mkdir($folderPath, 0755, true); // Create the folder with recursive permissions
        // Optionally, you can check if folder creation was successful
        if (file_exists($folderPath)) {
            // Folder created successfully
            $notification = [
                'message' => "Fotoğraf galerisi başarıyla eklendi!",
                'alert-type' => 'success'
            ];
        } else {
            // Folder creation failed
            $notification = [
                'message' => "Fotoğraf galerisi oluşturulurken bir hata oluştu!",
                'alert-type' => 'error'
            ];
        }

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
        // Update the database record
        $old_title = PhotoCategory::where('id', $request->title_id)->first();

        // Get the old and new folder paths
        $oldFolderPath = public_path('uploads/photoGallery/' . $old_title->title);
        $newFolderPath = public_path('uploads/photoGallery/' . $request->title);

        PhotoCategory::where('id', $request->title_id)->update([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now()
        ]);
        // Check if the old folder exists
        if (file_exists($oldFolderPath)) {
            // Attempt to rename the folder
            if (!rename($oldFolderPath, $newFolderPath)) {
                // If renaming fails, show an error message
                $notification = [
                    'message' => "Fotoğraf galerisi klasörü yeniden adlandırılırken bir hata oluştu!",
                    'alert-type' => 'error'
                ];
                return redirect()->back()->with($notification);
            }
        } else {
            // If the old folder doesn't exist, show a warning message
            $notification = [
                'message' => "Fotoğraf galerisi klasörü bulunamadı!",
                'alert-type' => 'warning'
            ];
            return redirect()->back()->with($notification);
        }

        $notification = [
            'message' => "Fotoğraf galerisi başarıyla düzenlendi!",
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }


    public function delete($id)
    {
        $images = Image::where('category', $id)->get();
        $cat = PhotoCategory::where('id', $id)->first();
        foreach ($images as $image) {
            @unlink($image->image);
            $image->delete();
        }

        // Delete the folder
        $folderPath = public_path('uploads/photoGallery/' . $cat->title);
        if (file_exists($folderPath)) {
            // Remove the folder
            if (!rmdir($folderPath)) {
                // If deleting fails, show an error message
                $notification = [
                    'message' => "Fotoğraf galerisi klasörü silinirken bir hata oluştu!",
                    'alert-type' => 'error'
                ];
                return redirect()->back()->with($notification);
            }
        }

        // Delete the category from the database
        $cat->delete();

        $notification = [
            'message' => "Fotoğraf galerisi başarıyla silindi!",
            'alert-type' => 'danger'
        ];

        return redirect()->back()->with($notification);
    }

    public function changeStatus($id, $status)
    {
        PhotoCategory::where('id', $id)->update(['status' => $status]);
    }
}
