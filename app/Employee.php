<?php

namespace App;

use App\Contracts\HasNovaAccess;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property string name
 * @property string email
 * @property string password
 * @property string remember_token
 * @property Carbon email_verified_at
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Employee extends Authenticatable implements HasNovaAccess
{
    use Notifiable;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'password',
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
    ];
}
