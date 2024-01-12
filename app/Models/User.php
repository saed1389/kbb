<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'occupation',
        'first_name',
        'last_name',
        'country',
        'birthday_date',
        'gender',
        'father_name',
        'mother_name',
        'working_status',
        'company_name',
        'work_address',
        'work_city',
        'work_province',
        'work_tel',
        'home_address',
        'home_city',
        'home_province',
        'home_tel',
        'mobile',
        'email',
        'password',
        'type',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["user", "admin", "manager"][$value],
        );
    }
}
