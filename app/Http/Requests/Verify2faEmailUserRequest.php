<?php

namespace App\Http\Requests;

use App\Models\ActivityLog;
use App\Rules\NoSpace;
use App\Rules\NoSQLInjection;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Verify2faEmailUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Check if user 2fa
        if (session()->has('is_user_2fa') && request()->user()->isVerified2FA()) {

            ActivityLog::create('2FA is already verified');
            return redirect()->route('dashboard');
        }
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
            'code' => [
                new NoSpace,
                new NoSQLInjection,
                'required',
                Rule::exists('users', 'code'),
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
            'code.required' => 'Code is required',
            'code.exists' => 'You entered wrong code',
        ];
    }
}
