<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function signIn()
    {
        return view('signin');
    }
    public function signUp()
    {
        return view('signup');
    }
    public function home()
    {
        return view('home');
    }
    public function postDetails()
    {
        return view('postDetails');
    }
}
