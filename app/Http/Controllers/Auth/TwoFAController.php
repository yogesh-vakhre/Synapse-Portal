<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Verify2faEmailUserRequest;
use App\Models\ActivityLog;
use Exception;
use Illuminate\Http\Request;

class TwoFAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return response()
     */
    public function index(Request $request)
    {
        // Check if user 2fa
        if (session()->has('is_user_2fa') && $request->user()->isVerified2FA()) {
            ActivityLog::create('2FA is disabled successfully');
            return redirect()->route('dashboard');
        }
        return view('auth.2fa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request\Verify2faEmailUserRequest  $request
     * @return response()
     */
    public function store(Verify2faEmailUserRequest $request)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        try {
            $code = $request->code;
            $user = $request->user()->isVerified2FACode($code);
            if ($user) {
                ActivityLog::create('2FA is verified');

                session(['is_user_2fa' =>  true]);
                return redirect()->route('dashboard');
            }

            ActivityLog::create('Your entered 2FA code is expired');

            return back()->with('error', 'Your entered 2FA code is expired');
        } catch (Exception $e) {
            return back()->with('error', 'Oops!, Something went wrong. Please try again.');
        }
    }

    /**
     * Resend the specified resource in storage.
     *
     *  @param  \Illuminate\Http\Request  $request
     *  @return response()
     */
    public function resend(Request $request)
    {
        try {
            // Check if user 2fa
            if (session()->has('is_user_2fa') && $request->user()->isVerified2FA()) {
                ActivityLog::create('2FA is verified');

                return redirect()->route('dashboard');
            }
            $user = $request->user()->generate2FACode();
            if (!$user) {
                ActivityLog::create('2FA Verification Code Generation Failed. Please attempt the process again');

                return back()->with('error', '2FA Verification Code Generation Failed. Please attempt the process again.');
            }

            ActivityLog::create('We sent you code on your email');

            return back()->with('success', 'We sent you code on your email.');
        } catch (Exception $e) {
            return back()->with('error', 'Oops!, Something went wrong. Please try again.');
        }
    }
}
