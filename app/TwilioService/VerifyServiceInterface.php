<?php

namespace App\TwilioService;

interface VerifyServiceInterface
{
    public function sendOTP(string $phone_number);

    public function verify(array $args);
}
