<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = Project::paginate(4);
    $posts = Post::paginate(3);
    return view('index', compact('posts', 'projects'));
});



Route::controller(PostController::class)->prefix('blogs')->group(function(){
    Route::get('', 'list')->name('blog.list');
    Route::get('/{post:slug}', 'show')->name('blog.show');
});



Route::controller(ProjectController::class)->prefix('projects')->group(function(){
    Route::get('', 'list')->name('projects.list');
    Route::get('/{project:slug}', 'show')->name('projects.show');
});

