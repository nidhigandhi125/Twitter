<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function follow(User $user)
    {
        return $this -> follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this -> follows()->detach($user);
    }
    
    public function follow_unfollow(User $user)
    {
       
        $this->follows()->toggle($user);
    }


    public function timeline()
    {  
        $friends = $this->follows()->pluck('id');
        return Tweet::whereIn('user_id',$friends)
        ->orwhere('user_id',$this->id)
        ->latest()->get();
        //return Tweet:: latest()->get();
    }

    public function personal_timeline()
    {
        
        return Tweet:: latest()->get();
    }
    
    public function follows()
    {
        return $this -> belongsToMany(User::class,'follows','user_id','following_user_id');
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }

    public function following(User $user)
    {
        return $this->follows()->where('following_user_id',$user->id)->exists();
    }

}

