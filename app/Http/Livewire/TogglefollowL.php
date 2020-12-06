<?php

namespace App\Http\Livewire;
use App\User;

use Livewire\Component;

class TogglefollowL extends Component
{   

    public $user;
    public function mount($user=null)
    {
       if($user) 
       {
        $this->user=$user;
    
       }
    }
    public function render()
    {
        
        return view('livewire.togglefollow-l');
    }

    public function store()
    {
        auth()->user()->follow_unfollow($this->user); 
        $this->emit('profile_display');  
        $this->emit('refresh');
        
      
      
    }
}

