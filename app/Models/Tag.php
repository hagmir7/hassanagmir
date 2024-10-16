<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Tag extends Model
{
    use HasFactory, HasSlug;




    protected $fillable = ['name', 'icon', 'description', 'slug'];

    public function projects(){
        return $this->belongsToMany(Project::class, 'project_tags');
    }


    public function posts()
    {
        return $this->belongsToMany(Post::class, 'project_tags');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->doNotGenerateSlugsOnUpdate()
            ->saveSlugsTo('slug');
    }
}
