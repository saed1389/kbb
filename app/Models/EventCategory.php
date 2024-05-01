<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventCategory extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'title_en', 'created_by'];
    protected $guarded = [];
    public function userName():BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
