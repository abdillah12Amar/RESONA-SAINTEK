<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'image_url', 'news_url', 'published_at', 'is_active'];
    protected $casts = ['is_active' => 'boolean'];
    
    public function scopeActive($query) {
        return $query->where('is_active', true);
    }
}