@extends('layouts.app')
@section('content')
    <h1> Posts</h1>
    @if(count($posts) > 1)

    	@foreach($posts as $post)

    		{{$post->title}}
    	@endforeach
    @else
    	<p> No Posts found </p>
    @endif
    
@endsection