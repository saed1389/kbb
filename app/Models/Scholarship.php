<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Scholarship extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function titleName():BelongsTo
    {
        return $this->belongsTo(UserTitle::class,'title', 'id');
    }
}
