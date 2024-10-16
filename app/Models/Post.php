<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = ["title", "image", "description", "content", "status", "slug"];


    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->doNotGenerateSlugsOnUpdate()
            ->slugsShouldBeNoLongerThan(100)
            ->saveSlugsTo('slug');
    }
}
