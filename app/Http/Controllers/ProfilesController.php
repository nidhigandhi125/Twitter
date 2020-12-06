<?php

namespace App\Http\Controllers;
use App\User;
use App\Tweet;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    protected $listeners=['profile_display'=>'show'];
    public function show(User $user)
    {
        return view('profiles',compact('user'));
       
    }
    public function index()
    {
        //
    }
 
    
            
       
    
}
