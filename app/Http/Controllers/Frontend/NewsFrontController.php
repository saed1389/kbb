<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsFrontController extends Controller
{
    public function index(){
        $news = News::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('frontend.info-center.news.index', compact('news'));
    }
}
