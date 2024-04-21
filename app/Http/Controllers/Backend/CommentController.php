<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::orderBy('status', 'asc')->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.comments.index', compact('comments'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        Comment::where('id', $id)->delete();

        $notification = array(
            'message' => "Yorum başarıyla silindi!",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function changeStatus($id, $status)
    {
        Comment::where('id', $id)->update(['status' => $status]);
    }
}
