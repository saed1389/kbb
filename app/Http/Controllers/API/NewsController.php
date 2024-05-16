<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::where('status', 1)
            ->where('confirm', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(20);
        return response()->json(['news' => $news], 200);
    }

    public function slider(){
        $sliders = News::where('status', 1)
            ->where('slider', 1)
            ->where('confirm', 1)
            ->orderBy('news_order', 'asc')
            ->orderBy('created_at', 'desc')
            ->limit(10)->get();

        return response()->json(['sliders' => $sliders], 200);
    }

    public function show($id)
    {
        $news = News::findOrFail($id);

        return response()->json(['news' => $news], 200);
    }

    public function events() {
        $news = Event::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(20);
        return response()->json(['news' => $news], 200);
    }

    public function eventDetail($id)
    {
        $news = Event::findOrFail($id);

        return response()->json(['news' => $news], 200);
    }
}
