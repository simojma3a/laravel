@extends('layouts.app')
@section('content')
    <img src="{{$service->photo}}" height="400" width="700"/>   
    <p> {{$service->name}}</p>
    <p> {{$service->adresse}}</p>
    <p> {{$service->phone}}</p>
    <p> {{$service->email}}</p>
    <p> {{$service->position}}</p>
    

  
@endsection
