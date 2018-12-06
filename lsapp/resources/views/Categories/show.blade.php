@extends('layouts.app')
@section('content')
    @include('Pages.services', ['service' => $services])
@endsection
