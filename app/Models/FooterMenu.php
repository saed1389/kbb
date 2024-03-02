<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FooterMenu extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function menuName(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }
}
