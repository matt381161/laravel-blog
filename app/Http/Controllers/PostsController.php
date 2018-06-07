<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show','create']);
    }

    public function index(){

        $posts = Post::latest();

        if($month = request('month')){
            $posts->whereMonth('created_at',Carbon::parse($month) -> month);
        }
        if($year = request('year')){
            $posts->whereYear('created_at',$year);
        }
        $posts=$posts->get();

    	return view('posts.index',compact('posts'));
    }
    public function show($id){
        $post = Post::find($id);
    	return view('posts.show',compact('post'));
    }
    public function create(){
        if(auth()->check()) {
            return view('posts.create');
        }
        else{
            return back()->withErrors([
                'message' => 'You should log in first.'
            ]);
        }
    }
    public function store(){
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        return redirect('/');
    }
}
