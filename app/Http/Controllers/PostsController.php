<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostsController extends Controller
{

    // public function blog()
    // {
    //     return view('blog');
    // }


    public function create()
    {
        return view('layouts.admin.dashbord');

    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
