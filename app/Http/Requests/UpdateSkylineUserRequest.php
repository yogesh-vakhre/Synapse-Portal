<?php

namespace App\Http\Requests;

use App\Rules\NoSpace;
use App\Rules\NoSQLInjection;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UpdateSkylineUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->route('skyline_user'); // Assumes your route parameter is named 'id'
        $id = base64_decode($id);

        return [
            'first_name' => [
                'required',
                new NoSpace,
                new NoSQLInjection,
                'min:1',
                'max:30',

            ],
            'last_name' => [
                'required',
                new NoSpace,
                new NoSQLInjection,
                'min:1',
                'max:30',
            ],
            /*'gender' => [
                'required',
                new NoSpace,
                new NoSQLInjection,
                'min:1',
                'max:10',
            ],
            'address' => [
                'required',
                new NoSQLInjection,
                'min:1',
                'max:50',
            ],
            'date_of_birth' => [
                'required',
                'date',
                new NoSpace,
                new NoSQLInjection,
                'min:1',
                'max:10',
            ],*/
            'email' => [
                'required',
                new NoSpace,
                new NoSQLInjection,
                'email',
                Rule::unique('users')->ignore($id),
                'min:1',
                'max:50',
            ],
            /*'password' => [
                'nullable',
                new NoSpace,
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],*/
            'product' => [
                'required',
                new NoSQLInjection,
                'min:1',
                'max:50',
            ],
            'notes' => [
                'nullable',
                new NoSQLInjection,
            ],
            'status' => [
                'required',
                new NoSpace,
                new NoSQLInjection,
            ],
            'is_2fa_status' => [
                'bail',
                new NoSpace,
                new NoSQLInjection,
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
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'gender.required' => 'Gender is required',
            'address.required' => 'Address is required',
            'date_of_birth.required' => 'Date of birth is required',
            'email.required' => 'Email is required',
            'email.exists' => 'You entered email does not exist',
            'password.required' => 'Password is required',
            'product.required' => 'Product is required',
            'status.required' => 'Status is required',
            'is_2fa_status.required' => '2FA status is required',
        ];
    }
}
