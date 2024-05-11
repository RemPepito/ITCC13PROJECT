<?php

namespace App\Http\Controllers;

use App\Models\tweet;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $tweets = tweet::orderBy('created_at','DESC');

        if(request()->has('search')){
           $tweets = $tweets->where('content','like','%'.request()->get('search','').'%');
        }

        return view('dashboard',[
            'tweets'=> $tweets->paginate(5)
        ]);
    }
}