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
                Rule::unique('users', 'phone_no')->ignore($this->arg('id'), 'id'),
            ],
            "country" => [
                "required",
                "exists:countries,id"
            ],
        ];
    }
}
