<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AlphaNumSpacesRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ( !preg_match ("/^[a-zA-ZáéíóúÁÉÍÓÚ0-9\s]+$/",$value)) {
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Este campo solo debe contener letras y números.';
    }
}
