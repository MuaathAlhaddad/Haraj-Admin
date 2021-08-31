<?php

namespace App\GraphQL\Validators;

use Illuminate\Validation\Rule;
use Nuwave\Lighthouse\Validation\Validator;

class UpdateUserInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array>
     */
    public function rules(): array
    {
        return [
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
                "exists:states,id"
            ]
        ];
    }
}
