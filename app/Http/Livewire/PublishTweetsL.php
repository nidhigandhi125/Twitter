<?php

namespace App\Http\Livewire;
use App\Tweet;
use App\User;
use Livewire\Component;

class PublishTweetsL extends Component
{
    public $body;
    public $tweets;
    
    
   public function render()
    {
    
        return view('livewire.publish-tweets-l');
    }

    public function store()
    {
     
        // $val = request()->validate(['body'=>'required|max:255']);
        // Tweet::create([
        //     'user_id'=>auth()->id(),
        //     'body'=> $val['body']
        // ]);
        $validateData=$this->validate([
            
            'body'=>'required|max:255',
        ]);
        //dd($this->body);
        Tweet::create([$validateData,
            'user_id'=>auth()->id(),
            'body' =>$this->body,
           
        ]);
        
        session()->flash('message','Tweet posted successfully!!!');
        $this->emit('refresh');
        $this->resetInputFields();
        //return redirect()->to('tweets');    
    }

    public function resetInputFields()
    {
        
        $this->body='';
    }

    // public function addtweets()
    // {
    //        return view('tailwind', [
    //         'tweets' => auth()->user()->timeline()
    //     ]);
    // }
}
