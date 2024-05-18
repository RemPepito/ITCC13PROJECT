<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tweet;
class tweetController extends Controller
{
    public function  store()
    {
        $validated = request()->validate([
            'content' => 'required|min:1|max:240'
        ]);

        $validated['user_id'] = auth()->id();

        tweet::create($validated);

        return redirect()->route('dashboardPage')->with('success','share your success!');
    }
    public function destroy(Tweet $tweetID){
        if(auth()->id()!== $tweetID->user_id){
            abort(404,"you are not the author");
        }
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

    public function update(Tweet $tweetID){

        if(auth()->id()!== $tweetID->user_id){
            abort(404,"you are not the author");
        }
        $tweetID->delete();

        $validated = request()->validate([
            'content' => 'required|min:1|max:240'
        ]);

        $tweetID->update($validated);

        return redirect()->route('tweets.show',$tweetID->id)->with('success',"changes updated");
    }
}
