<?php

namespace App\Http\Controllers;
use App\Tweet;
use App\User;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        //$tweets = $timeline;
        /*$ids = auth()->user()->follows()->get('id');
        $ids->push($this->id);
        return Tweet::whereIn('user_id',$ids)->latest()->get();*/
        return view('tailwind');
     

    }
    // public function store()
    // {
    //     $val = request()->validate(['body'=>'required|max:255']);
    //     Tweet::create([
    //         'user_id'=>auth()->id(),
    //         'body'=> $val['body']
    //     ]);
    //     return redirect('/tweets');
    // }

    
}
