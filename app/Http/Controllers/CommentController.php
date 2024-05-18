<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\tweet;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Tweet $tweet){

        $comment = new Comment();
        $comment->tweet_id = $tweet->id;
        $comment->user_id= auth()->id();
        $comment->content = request()->get('content');
        $comment->save();

        return redirect()->route('tweets.show',$tweet->id)->with('success',"Comment posted!");
    }
}
