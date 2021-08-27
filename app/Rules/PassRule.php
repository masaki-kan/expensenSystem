<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PassRule implements Rule
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
        //
            return preg_match( '/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,100}+\z/i' , $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '半角英数字をそれぞれ1種類以上含む8文字以上で入力してください。';
    }
}
