<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class SearchL extends Component
{
    public $searchTerm;
    public $message;
    public $users;

    public function mount()
    {
        $this->users = [];
    }

    public function render()
    {
    
        $this->users = User::where('name', 'like', '%' . $this->searchTerm . '%')->get();
        return view('livewire.search-l');
        
    }
}
