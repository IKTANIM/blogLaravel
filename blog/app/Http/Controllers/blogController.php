<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use App\Post;
use App\Comment;
class BlogController extends Controller
{
    public function signIn()
    {
        ////show all
        // $User= User::all();
        // dd($User);  
        return view('signin');
    }
    public function signInPost(Request $request)
    {
        $user=User::find($request->email);
        if($user){
            if($request->email == $user->email && $request->password ==$user->password)
            {
                $request->session()->put('email', $request->email);
                return redirect()->route('home');
            }
            else
            {
                $request->session()->flash('message', 'Invalid username or password');
                return redirect()->route('signin');
            }
        }
        else{
            $request->session()->flash('message', 'Invalid username or password');
            return redirect()->route('signin');
        }
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
    public function signOut(Request $request )
    {
        $request->session()->flush(); 
        return  redirect()->route('signin');
    }
    public function home(Request $request)
    {   ////Post insert
        // $post= new Post;
        // $post->emailPost="tanim";
        // $post->postTitle="Life Lesson";
        // $post->description="In your life you met new people. some are good and some bad.  Good people give all to you. Bad people take all from you.";
        // $post->save();
        // $post=Post::orderBy('updated_at')->get();//old to new
        $post=Post::latest('updated_at')->get();//new to old
        // dd(str_limit($post->description,20)); string limit
        //  dd($post[0]->user);
        //return view('home')->with('posts',$post);
        if($request->session()->has('email')){
            return view('home')->with('posts',$post);
        }
        else{
            return view('publicHome')->with('posts',$post);   
        }
    }
    public function postDetails(Request $request,$id)
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
        // dd($post->user);
        if($request->session()->has('email')){
            return view('postDetails')->with('post',$post);
        }
        else{
            return view('postDetailsPublic')->with('post',$post);   
        }
    }
    public function postDetailsPost(Request $request)
    {
        // $post=Post::find($id);
        // dd($request->all());
        $user=User::find(session('email'));
        $comment=new Comment;
        $comment->post_id=$request->postId;
        $comment->commentdData=$request->comment;
        $comment->commentedUser=$user->name;
        $comment->save();
        $post=Post::find($request->postId);
        dd($post->comments[0]);
        //$post->comment=$post->comment->latest('updated_at')->get();
        return view('postDetails')->with('post',$post);
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
