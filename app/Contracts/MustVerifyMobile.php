<?php


namespace App\Contracts;


interface MustVerifyMobile
{
    public function hasVerifiedMobile();

    public function markMobileAsVerified();

    public function sendMobileVerificationNotification();

    public function getMobileForVerification();
}
