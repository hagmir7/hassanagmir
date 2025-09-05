<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Lesson extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'section_id',
        'title',
        'slug',
        'content',
        'order',
        'is_free',
        'estimated_time',
    ];

    protected $casts = [
        'order' => 'integer',
        'is_free' => 'boolean',
        'estimated_time' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    // Relationships
    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }

    public function tutorial()
    {
        return $this->hasOneThrough(Tutorial::class, Section::class, 'id', 'id', 'section_id', 'tutorial_id');
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function approvedComments(): MorphMany
    {
        return $this->comments()->where('is_approved', true);
    }

    // Scopes
    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }

    public function scopeFree($query)
    {
        return $query->where('is_free', true);
    }

    // Accessors
    public function getWordCountAttribute()
    {
        return str_word_count(strip_tags($this->content));
    }

    public function getReadingTimeAttribute()
    {
        // Average reading speed: 200 words per minute
        return ceil($this->word_count / 200);
    }
}
