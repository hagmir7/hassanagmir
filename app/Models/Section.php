<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Section extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tutorial_id',
        'title',
        'slug',
        'order',
        'settings',
    ];

    protected $casts = [
        'order' => 'integer',
        'settings' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    // Relationships
    public function tutorial(): BelongsTo
    {
        return $this->belongsTo(Tutorial::class);
    }

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function orderedLessons(): HasMany
    {
        return $this->lessons()->orderBy('order');
    }

    public function freeLessons(): HasMany
    {
        return $this->lessons()->where('is_free', true);
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

    // Accessors
    public function getEstimatedDurationAttribute()
    {
        return $this->lessons()->sum('estimated_time');
    }
}
