<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserTitle extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'title_en', 'created_by'];

    public function userName():BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
