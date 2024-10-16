<?php

namespace App\Models;

use App\Enums\ProjectStatusEnums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Project extends Model
{
    use HasFactory, HasSlug;


    protected $fillable = ['name', 'description', 'content', 'image', 'status', 'slug'];

    protected $casts = [
        'status' => ProjectStatusEnums::class,
    ];


    public function tags(){
        return $this->belongsToMany(Tag::class, 'project_tags');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->doNotGenerateSlugsOnUpdate()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

}
