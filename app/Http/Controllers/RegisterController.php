<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view("register.index",[
            "title"=> "Register",
            "active"=> "register",
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:users',
            'name' => 'required',
            'license' => 'required|min:8|max:8',
            'phone' => 'required',
            'address' =>'required',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success','Registration success! Please Login!');
    }
}