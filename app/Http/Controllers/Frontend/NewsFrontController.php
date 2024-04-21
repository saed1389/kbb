<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NewsFrontController extends Controller
{
    public function index(){
        $news = News::where('status', 1)
            ->where('status', 1)
            ->where('confirm', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->paginate(20);
        return view('frontend.info-center.news.index', compact('news'));
    }

    public function show($slug){
        setlocale(LC_TIME, 'Turkish');
        $news = News::where('slug', $slug)->first();
        $comments = Comment::where('news_id', $news->id)->where('status', 1)->get();
        $lastNews = News::where('status', 1)->where('confirm', 1)->orderBy('created_at', 'desc')->take(10)->get();
        return view('frontend.info-center.news.show', compact('news', 'comments', 'lastNews'));
    }

    public function comment(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Comment::create([
            'comment' => $request->message,
            'writer' => $request->name,
            'email' => $request->email,
            'news_id' => $request->news_id,
            'user_id' => $request->user_id,
            'status' => 0,
        ]);

        return response()->json(['message' => 'Mesajın için teşekkürler!']);

    }

    public function search(Request $request){
        $searchTerm = $request->input('ara');

        $news = News::where('title', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('news_body', 'LIKE', '%' . $searchTerm . '%')
            ->where('status', 1)
            ->where('confirm', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('frontend.info-center.news.search' ,compact('news', 'searchTerm'));
    }

    public function events(){
        $eventsCategories = EventCategory::where('status',1)->get();
        return view('frontend.info-center.event.index', compact('eventsCategories'));
    }

    public function eventShow($id){
        $events = Event::where('status', 1)->where('event_category', $id )->whereYear('start_date', '=', date('Y'))->get();
        $category = EventCategory::where('id', $id)->first();
        return view('frontend.info-center.event.show', compact('events', 'category'));
    }

    public function eventShowEvent($slug){
        $event = Event::where('slug', $slug)->first();
        $category = EventCategory::where('id', $event->event_category)->first();

        return view('frontend.info-center.event.display', compact('event', 'category'));
    }
}
