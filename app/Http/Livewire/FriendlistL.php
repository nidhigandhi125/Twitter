<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FriendlistL extends Component
{
    protected $listeners=['refresh'=>'refresher'];
    public function render()
    {
        return view('livewire.friendlist-l');
    }

    public function refresher()
    {
        $refresh;
    }
}
