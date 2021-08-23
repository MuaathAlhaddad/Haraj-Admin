<?php

namespace App\GraphQL\Validators;

use Illuminate\Validation\Rule;
use Nuwave\Lighthouse\Validation\Validator;

class CreateAdInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'max:20',
            ],
            'description' => [
                'required',
                'max:1000',
            ],
            'price' => [
                'required',
                'number',
                'regex:/^\d+(\.\d{1,2})?$/'
            ],
            "taxomomyContents" => [
                "sometimes",
                "string",
                'min:2',
            ]
        ];
    }
}
