<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list(){
        $posts = Post::latest()->paginate(10);
        return view('post.list', compact('posts'));
    }

    public function show(Post $post){
        $title = $post->title;
        return view('post.show', compact('post', 'title'));
    }
}
