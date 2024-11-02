<?php

use App\Models\Post;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = Project::paginate(4);
    $posts = Post::paginate(3);
    return view('index', compact('posts', 'projects'));
});


Route::get('/blogs', function () {
    $posts = Post::paginate(10);
    return view('post.list', compact('posts'));
});


Route::get('/blogs/{post:slug}', function(Post $post){
    return view('post.show', compact('post'));
})->name('post.show');

