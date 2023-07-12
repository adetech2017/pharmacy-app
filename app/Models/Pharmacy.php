<?php

namespace App\Models;

use Firefly\Traits\FireflyUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Authenticatable
{
    use HasFactory, Notifiable, FireflyUser;

    protected $guard = 'pharmacy';

    protected $fillable = [
        'store_name',
        'office_phone_number',
        'office_address',
        'email',
        'reg_number',
        'business_number',
        'contact_name',
        'contact_email',
        'contact_phone_number',
        'contact_address',
        'password',
        'state_id',
        'city_id',
        'store_image',
        'latitude',
        'longitude',
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
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
