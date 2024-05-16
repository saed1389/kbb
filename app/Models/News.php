<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Cviebrock\EloquentSluggable\Sluggable;

class News extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = [];

    public function Sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
            'slug_en' => [
                'source' => 'title_en',
            ]
        ];
    }

    public function newsCategory(): BelongsTo
    {
        return $this->belongsTo(NewsCategory::class, 'news_category', 'id');
    }

    public function getAuthorName(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
