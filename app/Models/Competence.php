<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Competence extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function userName():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function pointName():BelongsTo
    {
        return $this->belongsTo(CompetencePoint::class, 'point_id', 'id');
    }
}
