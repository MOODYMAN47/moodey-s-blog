<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);
User::create([
    "name"=>$request->name,
    "email"=>$request->email,
    "password"=>Hash::make($request->password)
]);


    // You may want to redirect the user to a different page after registration
    return redirect('/login')->with('success', 'Registration successful. Please login.');
}
}
