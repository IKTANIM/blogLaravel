<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function signIn()
    {
        return view('signin');
    }
    public function signInPost(Request $request)
    {
        return view('dashboard');
    }
    public function signUp()
    {
        return view('signup');
    }
    public function logout()
    {
        return view('home');
    }
    public function home()
    {
        return view('home');
    }
    public function postDetails()
    {
        return view('postDetails');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
