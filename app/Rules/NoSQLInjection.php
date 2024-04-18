<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NoSQLInjection implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // check for NoSQL injection
        // For example, you can use regular expressions to detect malicious patterns
        $pattern = '/[^$()*\\;{}\'"]/';

        if (!preg_match($pattern, $value)) {
            $fail('The :attribute field contains invalid characters.');
        }
    }
}
