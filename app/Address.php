<?php

namespace App;

use App\Enums\Countries;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * @property Collection user
 * @property string address_line_1
 * @property string address_line_2
 * @property string city
 * @property string state
 * @property string zip_code
 * @property string country_code
 * @property string country_name
 */
class Address extends Model
{
    protected $fillable = [
        'address_line_1', 'address_line_2', 'city', 'state', 'zip_code', 'country_code',
    ];

    public function getCountryNameAttribute()
    {
        return Countries::getValue($this->country_code);
    }
}
