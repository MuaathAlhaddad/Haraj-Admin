<?php

namespace App\GraphQL\Validators;

use Illuminate\Validation\Rule;
use Nuwave\Lighthouse\Validation\Validator;

class CreateUserInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array>
     */
    public function rules(): array
    {
        return [
            "phone_no" => [
                'required',
                'regex:/(01)[0-9]{9}/',
                Rule::unique('users', 'phone_no'),
            ],
            "email" => [
                'required',
                'email',
                'regex:/^.+@.+$/i',
                Rule::unique('users', 'email'),
            ],
            "password" => [
                'required',
                'min:6',
            ],
            'name' => [
                'required',
            ],
            "country" => [
                "sometimes",
                "exists:countries,id"
            ],
            "state" => [
                "sometimes",
                "exists:states,id"
            ]
        ];
    }
}
