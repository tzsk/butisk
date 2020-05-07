<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Locale;

/**
 * @property Collection user
 * @property string nickname
 * @property string address_line_1
 * @property string address_line_2
 * @property string city
 * @property string state
 * @property string zip_code
 * @property string country_code
 * @property string country_name
 * @property boolean primary
 */
class Address extends Model
{
    protected $fillable = [
        'nickname', 'address_line_1', 'address_line_2', 'city', 'state', 'zip_code', 'country_code', 'primary',
    ];

    public function getCountryNameAttribute()
    {
        return Locale::getDisplayRegion(sprintf('-%s', $this->country_code));
    }
}
