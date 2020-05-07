<?php

namespace App\Partials\Models;

use App\Notifications\VerifyMobile;

trait CanVerifyMobile
{
    public function hasVerifiedMobile()
    {
        return ! is_null($this->mobile_verified_at);
    }

    public function markMobileAsVerified()
    {
        return $this->forceFill([
            'mobile_verified_at' => $this->freshTimestamp(),
        ])->save();
    }

    public function sendMobileVerificationNotification()
    {
        $this->notify(new VerifyMobile());
    }

    public function getMobileForVerification()
    {
        return $this->mobile;
    }
}
