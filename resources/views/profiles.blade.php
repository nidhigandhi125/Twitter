@extends('layouts.app')

@section('content')


<x-header header="Hey {{$user->name}}"/>
          <br>
         
        <div class="flex justify-between">
        
        
        @if($user==auth()->user())
       <x-button name="Edit Profile" />
       </div>
       
       @include('personaltimeline',[
        'tweets' => $user -> tweets
     ])
      <div class="flex justify-between">
        @else
      <livewire:togglefollow-l :user="$user"/>
        @endif
      </div>

     
      @endsection


