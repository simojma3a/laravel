@extends('layouts.appp')

@section('content')
    @include('service.index', ['service' => $services])
@endsection
