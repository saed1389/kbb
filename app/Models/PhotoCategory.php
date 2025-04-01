<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PhotoCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function userName():BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
