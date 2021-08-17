<?php

namespace App\GraphQL\Mutations;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Twilio\Rest\Client;

/**
 * GraphQL User Mutation
 */
class UserMutator
{
    /**
     * Create a new user instance after sending an OTP code to their phone number.
     * @param Request $request
     *
     * @return string
     */
    public function create($root, array $args)
    {
        
        // $this->validatePhoneNumber($args['phone_no']);
        if(User::wherePhoneNo($args['phone_no'])->exists()){ 
            return "duplicated";
        }

        $this->sendOTP($args['phone_no']);

         $this->storeUser($args);

        return "created";
    }
 
    /**
     *  Send OTP code to the given phone number
     *
     * @param string $phone_no
     * @throws \Twilio\Exceptions\ConfigurationException
     * @throws \Twilio\Exceptions\TwilioException
     */
    public function sendOTP(string $phone_no)
    {
        /* Get credentials from .env */
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");

        $twilio = new Client($twilio_sid, $token);

        $twilio->verify->v2->services($twilio_verify_sid)
            ->verifications
            ->create($phone_no, "sms");

    }

    /**
     * Store user
     * @param array $args
     *
    */
    public function storeUser(array $args)
    {
         
        User::create([
            "phone_no" => $args['phone_no']
        ]);

    }

    public function verifyPhoneNumber($root, array $args)
    {

        /* Get credentials from .env */
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");

        /* Verify */
        $twilio = new Client($twilio_sid, $token);

        $verification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verificationChecks
            ->create($args['verification_code'], array('to' => $args['phone_no']));

        if ($verification->valid) {
            $user = tap(User::where('phone_no', $args['phone_no']))->update(['phone_verified_at' => now()]);

            /* Authenticate user */
            Auth::login($user->first());

            return 'verified';
        }

        return 'Invalid verification code entered!';
    }

    
    /**
     * Update user
     * @param array $args
     *
    */
    public function updateUser(UpdateUserRequest $request, $args)
    {
        dd($args);
    

        $user=User::wherePhoneNo($args['phone_no'])->first();

        if(is_null($user)){ 
        return  "no exist";
        }

        $user->update([           
            "name" => $args["name"],
            "email" => $args["email"],
            "password" =>  $args["password"] 
        ]);
 
        $user->save();
    
        return "updated";

    }

}
