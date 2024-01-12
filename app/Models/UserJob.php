<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserJob extends Model
{
    use HasFactory;

    protected $fillable = ['job', 'job_en', 'created_by'];

    public function userName():BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
