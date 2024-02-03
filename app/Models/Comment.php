<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function writerName():BelongsTo
    {
        return $this->belongsTo(User::class, 'writer', 'id');
    }

    public function NewsName():BelongsTo
    {
        return $this->belongsTo(News::class, 'news_id', 'id');
    }
}
