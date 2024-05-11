<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tweet;
class tweetController extends Controller
{
    public function  store()
    {
        request()->validate([
            'content' => 'required|min:1|max:240'
        ]);
        $tweet = tweet::create([
            'content' =>request()->get('content',null),
        ]);

        return redirect()->route('dashboardPage')->with('success','share your success!');
    }
    public function destroy(Tweet $tweetID){

        $tweetID->delete();

        return redirect()->route('dashboardPage')->with('success','deleted success!');
    }

    public function show(Tweet $tweet){

        return view('tweets.show', compact('tweet'));
    }

    public function edit(Tweet $tweet){

        $editing =true;

        return view('tweets.show', compact('tweet', 'editing'));
    }

    public function update(Tweet $tweet){

        request()->validate([
            'content' => 'required|min:1|max:240'
        ]);

        $tweet->content = request()->get('content','');
        $tweet->save();

        return redirect()->route('tweets.show',$tweet->id)->with('success',"changes updated");
    }
}
