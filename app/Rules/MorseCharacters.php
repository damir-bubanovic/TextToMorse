<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MorseCharacters implements Rule
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
     * Determine if $value if made of numbers, lowercases and spaces
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (preg_match('/(^[a-z0-9 ]+$)+/', $value)) {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Dude only lowercase and numbers, and no special characters!';
    }
}
