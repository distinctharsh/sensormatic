<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'type',
        'image',
        'file',
        'video_url',
        'author',
        'published_date',
        'featured',
        'order',
        'meta_title',
        'meta_description',
        'active'
    ];

    protected $casts = [
        'featured' => 'boolean',
        'active' => 'boolean',
        'published_date' => 'date',
    ];

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }
}
