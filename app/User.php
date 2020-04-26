<?php

namespace App;

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
 * @property string mobile
 * @property string country_code
 * @property string remember_token
 * @property Carbon email_verified_at
 * @property Carbon mobile_verified_at
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'password', 'provider', 'provider_id', 'calling_code', 'mobile', 'country_code',
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'mobile_verified_at' => 'datetime',
    ];
}
