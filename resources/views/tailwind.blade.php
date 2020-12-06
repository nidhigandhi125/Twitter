@extends('layouts.app')

@section('content')
<livewire:publish-tweets-l/>
<div class="border border-gray-300 rounded-lg">
    <livewire:tweets-l/>
</div>
@endsection

