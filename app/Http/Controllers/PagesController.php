<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function blog(){
    return view('blog');
}
public function post(){
    return view('layouts.post');
}
public function about(){
    return view('layouts.about');
}
public function dashboard(){
    return view('layouts.admin.dashboard');
}

}
