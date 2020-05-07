<?php

namespace App\Casts;

use App\Casts\Interfaces\HasMobileNumber;
use App\Casts\Types\Mobile as MobileType;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Mobile implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return ($model instanceof HasMobileNumber) ?
            MobileType::make($model->calling_code, $model->mobile_number) : null;
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return ($value instanceof MobileType) ? [
            'calling_code' => $value->code(),
            'mobile_number' => $value->number(),
        ] : [];
    }
}
