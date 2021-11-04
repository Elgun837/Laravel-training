@extends('layouts.app')
@section('title')Users @endsection



@section('content')


<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">Profil photo</th>
    </tr>
    </thead>
    <tbody>

        @foreach($response as $item)
    <tr>
        <th scope="row">{{ $item['id'] }}</th>
        <td>{{ $item['email'] }}</td>
        <td>{{ $item['first_name'] }}</td>
        <td>{{ $item['last_name'] }}</td>
        <td><img src="{{ $item['avatar'] }}"></td>
    </tr>
        @endforeach
    </tbody>
</table>

@endsection
