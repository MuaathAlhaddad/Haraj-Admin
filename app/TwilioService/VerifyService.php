<?php

namespace App\TwilioService;

use Symfony\Component\HttpFoundation\Response;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class VerifyService implements VerifyServiceInterface
{
    public string $twilio_verify_sid;

    /**
     *  Send OTP code to the given phone number
     *
     * @param string $phone_number
     * @return array
     * @throws ConfigurationException
     * @throws TwilioException
     */
    public function sendOTP(string $phone_number): array
    {
        $twilio = $this->registerCredentials();

       $twilio->verify->v2->services($this->twilio_verify_sid)
           ->verifications
           ->create($phone_number, "sms");

        return [
            'data' => [
                'message' => 'OTP has been sent successfully',
                'status' => Response::HTTP_OK
            ]
        ];
    }

    /**
     * verify OTP code given by the user
     *
     * @param array $args
     * @return array
     * @throws ConfigurationException
     * @throws TwilioException
     */
    public function verifyOTP(array $args): array
    {
        $twilio = $this->registerCredentials();

        $verification = $twilio->verify->v2->services($this->twilio_verify_sid)
            ->verificationChecks
            ->create($args['verification_code'], array('to' => $args['phone_no']));

        if ($verification->valid) {
            return [
                'data' => [
                    'message' => 'Phone number has been verified successfully',
                    'status' => Response::HTTP_OK
                ]
            ];
        }

        return [
            'errors' => ['message' => 'Invalid verification code entered!'],
        ];
    }

    /**
     * Get and Register Credentials
     * @return Client
     * @throws ConfigurationException
     */
    public function registerCredentials(): Client
    {
        $token = config("services.twilio.token");
        $twilio_sid = config("services.twilio.sid");
        $this->twilio_verify_sid = config("services.twilio.verify_sid");

        return new Client($twilio_sid, $token);
    }
}
