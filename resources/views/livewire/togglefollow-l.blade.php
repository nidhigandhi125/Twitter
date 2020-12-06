<div  class="lg:flex-1 lg:mx-10" style="max-width: 700px">
<button type="submit" id="toggle_btn" class="bg-blue-500 rounded-lg shadow py-2 px-2 p-8 text-white" wire:click="store">
{{auth()->user()->following($user)?('Unfollow Me'):('Follow Me')}}
</button>
<br>        
<div>
@if(auth()->user()->following($user))
<br>
<hr>
<br>
     @include('personaltimeline',[
        'tweets' => $user -> tweets
     ])
@endif
</div>
</div>
        