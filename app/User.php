<?php

namespace App;

use App\Casts\Interfaces\HasMobileNumber;
use App\Casts\Mobile;
use App\Casts\Types\Mobile as MobileType;
use App\Contracts\MustVerifyMobile;
use App\Partials\Models\CanVerifyMobile;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property string provider
 * @property string provider_id
 * @property string name
 * @property string email
 * @property string password
 * @property string calling_code
 * @property string mobile_number
 * @property MobileType mobile
 * @property string remember_token
 * @property Carbon email_verified_at
 * @property Carbon mobile_verified_at
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class User extends Authenticatable implements MustVerifyEmail, MustVerifyMobile, HasMobileNumber
{
    use Notifiable, CanVerifyMobile;

    protected $fillable = [
        'name', 'email', 'password', 'provider', 'provider_id', 'calling_code', 'mobile_number',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'mobile_verified_at' => 'datetime',
        'mobile' => Mobile::class,
    ];
}
