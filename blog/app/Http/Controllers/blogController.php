<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use App\Post;
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

        //One user can have many posts
        $post=User::find('tanvir');
        dd($post->posts);

        return view('signup');
    }
    public function logout()
    {
        return view('home');
    }
    public function home()
    {   ////Post insert
        // $post= new Post;
        // $post->emailPost="tanvir";
        // $post->postTitle="I am good at";
        // $post->imgExt="1";
        // $post->description="FGshdfk sdf";
        // $post->save();
        // $post=Post::orderBy('updated_at')->get();//old to new
        $post=Post::latest('updated_at')->get();//new to old
        // dd(str_limit($post->description,20)); string limit
        //  dd($post[0]->user);
        return view('home')->with('posts',$post);
    }
    public function postDetails($id=1)
    {
        ////Post details
        // $post=Post::all();
        // dd($post);
        ////Finding the user of a post
        // $user=Post::find(1)->user;
        // dd($user);
        // $user=Post::all();
        // dd($user[0]->user);
        // dd($id);
        $post=Post::find($id);
        return view('postDetails')->with('post',$post);
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
