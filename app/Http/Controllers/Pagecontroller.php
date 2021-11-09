<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Pagecontroller extends Controller
{
    public function home(){
        return view('home',);
    }
    public function contact(){
        return view('contact');
    }
    public function service(){
        return view('service');
    }
    public function serviceParam($id)
    {
        return view('serviceParam')->with('myId', $id);
    }

    public function users(){
        $response = http::get('https://reqres.in/api/users?page=1 ');
        return view('users', ['response'=> $response['data']]);
    }
    public function error(){
        return view('404');
    }

}
