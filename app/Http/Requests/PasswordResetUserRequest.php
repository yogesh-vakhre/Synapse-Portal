<?php

namespace App\Http\Requests;

use App\Rules\NoSpace;
use App\Rules\NoSQLInjection;
use Illuminate\Foundation\Http\FormRequest;

class PasswordResetUserRequest extends FormRequest
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
            ]
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
            //
        ];
    }
}
