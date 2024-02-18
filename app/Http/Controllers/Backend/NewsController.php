<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\PhotoCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Yajra\DataTables\Facades\DataTables;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.news.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $galleries = PhotoCategory::where('status', 1)->get();
        $categories = NewsCategory::where('status', 1)->get();
        return view('admin.news.add', compact('galleries', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'title' => 'required',
            'news_body' => 'required',
        ]);

        if ($request->file('image')){

            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img1 = $manager->read($request->file('image'));
            $img2 = $manager->read($request->file('image'));
            $img3 = $manager->read($request->file('image'));

            $imgSmall = $img2->scale(355, 124);
            $imgMid = $img3->scale(590, 204);

            $img1->toJpeg(80)->save(base_path('public/uploads/news/original/'.$name_gen));
            $imgMid->toJpeg(60)->save(base_path('public/uploads/news/mid/'.$name_gen));
            $imgSmall->toJpeg(80)->save(base_path('public/uploads/news/small/'.$name_gen));
            $save_url = $name_gen;
        } else {
            $save_url = '';
        }

        if ($request->gallery != 0) {
            $imgGallery = $manager->read($request->file('image'));
            $imgGallery->toJpeg(80)->save(base_path('public/uploads/photoGallery/'.$name_gen));
            Image::create([
                'category' => $request->gallery,
                'image' => 'uploads/photoGallery/'.$name_gen,
                'created_by' => Auth::user()->id,
                'status' => 1
            ]);
        }

        if ($request->new_page) {
            $new_page = $request->new_page;
        } else {
            $new_page = 0;
        }

        News::create([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'slug' => Str::slug($request->title),
            'slug_en' => Str::slug($request->title_en),
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'short_description' => $request->short_description,
            'short_description_en' => $request->short_description_en,
            'news_href' => $request->news_href,
            'gallery' => $request->gallery,
            'new_page' => $new_page,
            'news_body' => $request->news_body,
            'news_body_en' => $request->news_body_en,
            'placeId' => $request->placeId,
            'news_category' => $request->news_category,
            'slider' => $request->slider,
            'OnPermission' => $request->OnPermission,
            'status' => $request->status,
            'image' => $save_url,
            'cropImage' => $this->storeBase64($request->image_base64),
            'created_by' => Auth::user()->id,
            'news_order' => 0,
            'confirm' => 1
        ]);

        $notification = array(
            'message' => "Haber başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('news.index')->with($notification);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::where('id', $id)->first();
        $galleries = PhotoCategory::where('status', 1)->get();
        $categories = NewsCategory::where('status', 1)->get();
        return view('admin.news.edit', compact('categories', 'galleries', 'news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'news_body' => 'required',
        ]);

        if ($request->file('image')){
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img1 = $manager->read($request->file('image'));
            $img2 = $manager->read($request->file('image'));
            $img3 = $manager->read($request->file('image'));

            $imgSmall = $img2->scale(355, 124);
            $imgMid = $img3->scale(590, 204);

            $img1->toJpeg(80)->save(base_path('public/uploads/news/original/'.$name_gen));
            $imgMid->toJpeg(60)->save(base_path('public/uploads/news/mid/'.$name_gen));
            $imgSmall->toJpeg(80)->save(base_path('public/uploads/news/small/'.$name_gen));
            @unlink('uploads/news/original/'.$request->oldImage);
            @unlink('uploads/news/mid/'.$request->oldImage);
            @unlink('uploads/news/small/'.$request->oldImage);
            $save_url = $name_gen;
        } else {
            $save_url = $request->oldImage;
        }

        if ($request->gallery != 0) {
            $imgGallery = $manager->read($request->file('image'));
            $imgGallery->toJpeg(80)->save(base_path('public/uploads/photoGallery/'.$name_gen));

            $photo = Image::where('image', $request->oldImage)->first();

            if ($photo) {
                @unlink('uploads/photoGallery/'.$request->oldImage);
                $photo->delete();
            }

            Image::create([
                'category' => $request->gallery,
                'image' => 'uploads/photoGallery/'.$name_gen,
                'created_by' => Auth::user()->id,
                'status' => 1
            ]);
        }

        if ($request->image_base64) {
            $crop = $this->storeBase64($request->image_base64);
            @unlink('uploads/news/crop/'.$request->oldCrop);
        } else {
            $crop = $request->oldCrop;
        }

        if ($request->new_page) {
            $new_page = $request->new_page;
        } else {
            $new_page = 0;
        }

        if (Auth::user()->type == 'admin') {
            $confirm = 1;
        } else {
            $confirm = 0;
        }

        News::where('id', $id)->update([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'slug' => Str::slug($request->title),
            'slug_en' => Str::slug($request->title_en),
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'short_description' => $request->short_description,
            'short_description_en' => $request->short_description_en,
            'news_href' => $request->news_href,
            'gallery' => $request->gallery,
            'new_page' => $new_page,
            'news_body' => $request->news_body,
            'news_body_en' => $request->news_body_en,
            'placeId' => $request->placeId,
            'news_category' => $request->news_category,
            'slider' => $request->slider,
            'OnPermission' => $request->OnPermission,
            'status' => $request->status,
            'image' => $save_url,
            'cropImage' => $crop,
            'created_by' => Auth::user()->id,
            'news_order' => $confirm,
        ]);

        $notification = array(
            'message' => "Haber başarıyla güncellendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('news.index')->with($notification);
    }

    public function delete($id)
    {
        $news = News::findOrFail($id);
        @unlink('uploads/news/original/'.$news->image);
        @unlink('uploads/news/mid/'.$news->image);
        @unlink('uploads/news/small/'.$news->image);
        @unlink('uploads/news/crop/'.$news->cropImage);
        $news->delete();
        $notification = array(
            'message' => "Haber başarıyla silindi!",
            'alert-type' => 'success'
        );

        return redirect()->route('news.index')->with($notification);
    }

    public function changeStatus($id, $status)
    {
        News::where('id', $id)->update(['status' => $status]);
    }

    public function changeConfirm($id, $confirm)
    {
        News::where('id', $id)->update(['confirm' => $confirm]);
    }

    public function confirm()
    {
        $news = News::where('confirm', 0)->get();
        return view('admin.news.confirm', compact('news'));
    }

    public function GetNews()
    {
        if (\request()->ajax()) {
            return datatables()->eloquent(
                News::with('newsCategory:id,title')
                    ->where('news.confirm', 1)
            )
                ->addColumn('id', function ($news) {
                    return $news->id;
                })
                ->addColumn('title', function ($news) {
                    return $news->title;
                })
                ->addColumn('news_category', function ($news) {
                    return $news->newsCategory->title;
                })
                ->addColumn('hit', function ($news) {
                    return $news->hit;
                })
                ->addColumn('news_body', function ($news) {
                    return $news->news_body;
                })
                ->addColumn('news_href', function ($news) {
                    return $news->news_href;
                })
                ->addColumn('image', function ($news) {
                    return $news->image;
                })
                ->addColumn('created_at', function ($news) {
                    return $news->created_at;
                })
                ->addColumn('status', function ($news) {
                    return $news->status;
                })
                ->addColumn('confirm', function ($news) {
                    return $news->confirm;
                })
                ->make(true);
        } else {
            return false;
        }
    }
    private function storeBase64($imageBase64)
    {
        list($type, $imageBase64) = explode(';', $imageBase64);
        list(, $imageBase64)      = explode(',', $imageBase64);
        $imageBase64 = base64_decode($imageBase64);
        $imageName= time().'.jpg';
        $path = public_path() . "/uploads/news/crop/" . $imageName;

        file_put_contents($path, $imageBase64);

        return $imageName;
    }
}
