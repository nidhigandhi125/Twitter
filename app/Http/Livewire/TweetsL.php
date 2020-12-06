<?php

namespace App\Http\Livewire;
use App\Tweet;
use App\User;
use Livewire\Component;

class TweetsL extends Component
{
    public $tweets;

    protected $listeners = ['refresh'=>'refresher'];
    public function render()
    {
        $this->tweets=auth()->user()->timeline();
        return view('livewire.tweets-l'           
        );
    }
    public function refresher()
    {
        $refresh;
    }

    public function explore()
    {
        $this->tweets=auth()->user()->personal_timeline();
    }
}
