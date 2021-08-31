<?php

namespace App\TwilioService;

use Symfony\Component\HttpFoundation\Response;

interface VerifyServiceInterface
{
    public function sendOTP(string $phone_number): array;

    public function verifyOTP(array $args): array;
}
