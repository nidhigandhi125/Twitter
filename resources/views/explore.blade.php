@extends('layouts.app')

@section('content')

<div class="border border-gray-300 rounded-lg">
          @foreach($tweets as $tweet)
            @include('tweets')
          @endforeach
      </div>
@endsection