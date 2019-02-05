<?php

namespace Danielebarbaro\LaravelVatEuValidator\Rules;

use Danielebarbaro\LaravelVatEuValidator\Facades\VatValidatorFacade as VatValidator;
use Illuminate\Contracts\Validation\Rule;

class VatNumberFormat implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return VatValidator::validateFormat($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'VAT number :attribute  not exist.';
    }
}
