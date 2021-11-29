<?php

namespace App\GraphQL\Validators;

use Illuminate\Validation\Rule;
use Nuwave\Lighthouse\Validation\Validator;

class UpdateAdInputValidator extends Validator
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
            ],
            'description' => [
                'required',
            ],
            'price' => [           
                'required',
                'numeric',
                'regex:/^\d+(\.\d{1,2})?$/'
            ],
        ];
    }
}
