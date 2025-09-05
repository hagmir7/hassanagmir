<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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


    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relationships
    public function tutorials(): BelongsToMany
    {
        return $this->belongsToMany(Tutorial::class)->withTimestamps();
    }

    public function publishedTutorials(): BelongsToMany
    {
        return $this->tutorials()->where('is_published', true);
    }

    // Accessors
    public function getTutorialsCountAttribute()
    {
        return $this->tutorials()->count();
    }

    public function getPublishedTutorialsCountAttribute()
    {
        return $this->publishedTutorials()->count();
    }
}
