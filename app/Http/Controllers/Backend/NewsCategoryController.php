<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = NewsCategory::orderBy('id', 'desc')->get();
        return view('admin.news_category.index', compact('news'));
    }
    public function store(Request $request)
    {
        NewsCategory::create([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'order' => 0,
            'status' => 1,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Haber kategorisi başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('news-categories.index')->with($notification);
    }

    public function editModal(string $id)
    {
        $title = NewsCategory::find($id);
        return response()->json([
            'status' => 200,
            'title' => $title
        ]);
    }

    public function updateModal(Request $request)
    {
        NewsCategory::where('id', $request->title_id)->update([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Haber kategorisi başarıyla düzenlendi!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function delete($id)
    {
        NewsCategory::where('id', $id)->delete();
        $notification = array(
            'message' => "Haber kategorisi başarıyla silindi!",
            'alert-type' => 'danger'
        );

        return redirect()->back()->with($notification);
    }

    public function changeStatus($id, $status)
    {
        NewsCategory::where('id', $id)->update(['status' => $status]);
    }
}
