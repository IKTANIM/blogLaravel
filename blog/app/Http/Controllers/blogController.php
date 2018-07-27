<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class BlogController extends Controller
{
    public function signIn()
    {
        ////show all
        $User= User::all();
        dd($User);  
        return view('signin');
    }
    public function signInPost(Request $request)
    {
        return view('dashboard');
    }
    public function signUp()
    {
        ////insert
        // $user= new User;
        // $user->email="robi";
        // $user->name="tanvir";
        // $user->password="1";
        // $user->save();

        ////update
        // $user=User::find('tanim');
        // $user->name='tanim';
        // $user->save();
        // dd($user);

        ////delete
        // $user=User::find('tanim');
        // $user->delete();
        
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
