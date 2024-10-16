<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ["name", "image", "description", "content", "status", "slug"];


    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }
}
