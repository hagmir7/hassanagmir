<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'icon', 'description', 'slug'];

    public function projects(){
        return $this->belongsToMany(Project::class, 'project_tags');
    }


    public function posts()
    {
        return $this->belongsToMany(Post::class, 'project_tags');
    }
}
