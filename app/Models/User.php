<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Cviebrock\EloquentSluggable\Sluggable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use Sluggable;
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
        'slug',
        'country',
        'tc_card_no',
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
        'memberChatAddress',
        'email',
        'password',
        'type',
        'user_type',
        'profile_image',
        'user_cv',
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

    public function Sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'first_name'. '-' .'last_name',
            ],
        ];
    }

    public function titleName():BelongsTo
    {
        return $this->belongsTo(UserTitle::class,'title', 'id');
    }

    public function jobName():BelongsTo
    {
        return $this->belongsTo(UserJob::class,'occupation', 'id');
    }

    public function workCity():BelongsTo
    {
        return $this->belongsTo(Provinces::class, 'work_province', 'province_no');
    }

    public function workSate():BelongsTo
    {
        return $this->belongsTo(City::class, 'work_city', 'city_no');
    }

    public function homeCity():BelongsTo
    {
        return $this->belongsTo(Provinces::class, 'home_province', 'province_no');
    }

    public function homeSate():BelongsTo
    {
        return $this->belongsTo(City::class, 'home_city', 'city_no');
    }

    public function countryName():BelongsTo
    {
        return $this->belongsTo(Country::class, 'country', 'id_country');
    }

    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["user", "admin", "manager"][$value],
        );
    }

    public function getProfileImageAttribute($value)
    {
        return $value ? asset($value) : asset('front/assets/images/defaultUser.png');
    }
}
