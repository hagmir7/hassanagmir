<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;


class CategoryController extends Controller
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'logo',
        'slug',
        'description',
        'order',
    ];

    protected $casts = [
        'order' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    // Relationships
    public function tutorials(): HasMany
    {
        return $this->hasMany(Tutorial::class);
    }

    public function publishedTutorials(): HasMany
    {
        return $this->tutorials()->where('is_published', true);
    }

    // Scopes
    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}
