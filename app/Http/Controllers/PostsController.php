<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;

use App\Repositories\PostsRepo;

use App\User;

use App\Tag;

use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct() {
        
        $this->middleware('auth')->except(['index', 'show']);
        
    }
    
    public function index(Posts $posts) {
        
        $posts = Posts::latest()
            ->filter(request()->only(['year', 'month']))
            ->get();
        
        return view('posts.index', compact('posts'));

    }

    public function show(Posts $post){
        

        return view('posts.show', compact('post'));

    }
    
    public function create(){

        return view('posts.create');

    }
    
     public function store(){

         $this->validate(request(), [
             
             'title' => 'required',
             'body' => 'required'
             
         ]);
         
         auth()->user()->publish( 
             new Posts(request(['title', 'body']))
         );
         
         session()->flash('Your post was published');
        
         
         return redirect('/');

    }

}
