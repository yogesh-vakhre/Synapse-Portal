<?php

namespace App\Http\Requests;

use App\Rules\NoSpace;
use App\Rules\NoSQLInjection;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SignInUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => [
                new NoSpace,
                new NoSQLInjection,
                'required',
                'email',
                Rule::exists('users', 'email')
            ],
            'password' => [
                new NoSpace,
                new NoSQLInjection,
                'required',

            ],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'email.required' => 'Email is required',
            'email.exists' => 'You entered email does not exist',
        ];
    }
}
