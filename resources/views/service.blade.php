@extends('layouts.app')
@section('title') Service page @endsection
@section('content')
    <a href="{{ route('serviceParam', '1') }}">Service 1</a>
    <a href="{{ route('serviceParam', '2') }}">Service 2</a>
    <a href="{{ route('serviceParam', '3') }}">Service 3</a>
    <a href="{{ route('serviceParam', '4') }}">Service 4</a>
@endsection
