@extends('layouts.app')
@section('title') Service page @endsection
@section('content')
<ul>
    <li><a href="{{ route('serviceParam', '1') }}">Service 1</a></li>
    <li><a href="{{ route('serviceParam', '2') }}">Service 2</a></li>
    <li><a href="{{ route('serviceParam', '3') }}">Service 3</a></li>
    <li><a href="{{ route('serviceParam', '4') }}">Service 4</a></li>
</ul>
@endsection