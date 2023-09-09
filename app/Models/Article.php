<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title', 'category', 'image_url', 'content', 'slug', 'published_at', 'status', 'created_by',
    ];
    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')
            ->where('status', 1)
            ->orderBy('published_at', 'desc');
    }
}
