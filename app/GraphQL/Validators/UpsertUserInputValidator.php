<?php

namespace App\GraphQL\Validators;

use Illuminate\Validation\Rule;
use Nuwave\Lighthouse\Validation\Validator;

class UpsertUserInputValidator extends Validator
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
                'sometimes',
                'regex:/(01)[0-9]{9}/',
                Rule::unique('users', 'phone_no')->ignore($this->arg('id'), 'id'),
            ],
            "email" => [
                'sometimes',
                'email',
                'regex:/^.+@.+$/i',
                Rule::unique('users', 'email')->ignore($this->arg('id'), 'id'),
            ],
            "password" => [
                'sometimes',
                'min:6',
            ],
            'name' => [
                'sometimes',
                'min:5',
            ],
            'gender' => [
                Rule::in(['m', 'f']),
            ],
            "country" => [
                "sometimes",
                "exists:countries,id"
            ],
            "state" => [
                "sometimes",
                "exists:countries,id"
            ]
        ];
    }
}
