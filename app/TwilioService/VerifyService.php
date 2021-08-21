<?php

namespace App\TwilioService;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Twilio\Rest\Client;

class VerifyService implements VerifyServiceInterface
{
    public string $twilio_verify_sid;

    /**
     *  Send OTP code to the given phone number
     *
     * @param string $phone_number
     * @throws \Twilio\Exceptions\ConfigurationException
     * @throws \Twilio\Exceptions\TwilioException
     */
    public function sendOTP(string $phone_number)
    {
        $twilio = $this->registerCredentials();

        $twilio->verify->v2->services($this->twilio_verify_sid)
            ->verifications
            ->create($phone_number, "sms");

    }

    public function verify(array $args): string
    {
        $twilio = $this->registerCredentials();

        $verification = $twilio->verify->v2->services($this->twilio_verify_sid)
            ->verificationChecks
            ->create($args['verification_code'], array('to' => $args['phone_no']));

        if ($verification->valid) {
            $user = tap(User::where('phone_no', $args['phone_no']))->update(['phone_verified_at' => now()]);

            Auth::login($user->first());

            return 'verified';
        }

        return 'Invalid verification code entered!';
    }

    /**
     * Get and Register Credentials
     * @return Client
     * @throws \Twilio\Exceptions\ConfigurationException
     */
    public function registerCredentials(): Client
    {
        $token = config("services.twilio.token");
        $twilio_sid = config("services.twilio.sid");
        $this->twilio_verify_sid = config("services.twilio.verify_sid");

        return new Client($twilio_sid, $token);
    }
}
