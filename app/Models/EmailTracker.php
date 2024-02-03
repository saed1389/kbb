<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTracker extends Model
{
    protected $table = 'email_trackers';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
