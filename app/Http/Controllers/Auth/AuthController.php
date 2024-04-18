<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordUserRequest;
use App\Http\Requests\PasswordResetUserRequest;
use App\Http\Requests\UpdatePasswordResetUserRequest;
use App\Models\ActivityLog;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.account-general');
    }

    /**
     * Show the form for forgot password a new resource..
     */
    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    /**
     * Send a newly  password reset link resource in storage.
     *
     * @param \Illuminate\Http\Request\PasswordResetUserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function sendPasswordResetLink(PasswordResetUserRequest $request)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        try {
            $status = Password::sendResetLink(
                $request->only('email')
            );

            return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
        } catch (Exception $e) {
            return back()->with("error", "Oops!, Something went wrong. Please try again...");
        }
    }

    /**
     * Show the form for reset password a new resource.
     *
     * @param string $id
     * @param Request $request
     */
    public function resetPassword($token, Request $request)
    {
        $email = $request->email ?? '';
        return view('auth.password-reset', compact('token', 'email'));
    }

    /**
     * Update password the specified resource in storage.
     *
     * @param \Illuminate\Http\Request\UpdatePasswordResetUserRequest $request
     */
    public function updateResetPassword(UpdatePasswordResetUserRequest $request)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        try {
            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function (User $user, string $password) {
                    $user->forceFill([
                        'password' => Hash::make($password)
                    ])->setRememberToken(Str::random(60));

                    $user->save();

                    ActivityLog::create('Password reset successfully');
                    event(new PasswordReset($user));
                }
            );

            return $status === Password::PASSWORD_RESET
                ? redirect()->route('sign_in')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
        } catch (Exception $e) {
            return back()->with("error", "Oops!, Something went wrong. Please try again...");
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function changePassword()
    {
        return view('auth.change-password');
    }

    /**
     * Update password the specified resource in storage.
     *
     * @param \Illuminate\Http\Request\ChangePasswordUserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(ChangePasswordUserRequest  $request)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        try {
            $user = auth()->user();
            $update  = $user->update(['password' => Hash::make($request->newPassword)]);

            if (!$update) {
                ActivityLog::create('Password changed successfully');
                return back()->with('error', "Oops! Your password is not changed");
            }
            return back()->with("success", "Your password is changed successfully.");
        } catch (Exception $e) {
            return back()->with("error", "Oops!, Something went wrong. Please try again...");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function accountSecurity(Request $request)
    {
        $google2fa_url = "";
        if (!empty(auth()->user()->google2fa_secret)) {
            $google2fa = app('pragmarx.google2fa');
            //$twoFa = new Google2FA();
            $google2fa_url = $google2fa->getQRCodeInline(
                config('app.name'),
                auth()->user()->email,
                auth()->user()->google2fa_secret
            );
        }

        $user = auth()->user();
        $loggedin_instances = $user->sessions()
            ->where('id', '!=', session()->getId())
            ->get(['id', 'ip_address', 'user_agent', 'last_activity']);

        return view('auth.account-security', compact('google2fa_url', 'loggedin_instances'));
    }

    /**
     * Handle response after user authenticated
     *
     * @param Request $request
     * @param Auth $user
     *
     * @return \Illuminate\Http\Response
     */
    public function logoutOtherDevices(Request $request)
    {
        try {
            if (!(Hash::check($request->currentPassword, auth()->user()->password))) {
                ActivityLog::create('Your  password does not matches with your account password. Please try again.');
                // The passwords matches
                return back()->with("error", "Your  password does not matches with your account password. Please try again.");
            }
            $user = auth()->user();
            Auth::setUser($user)->logoutOtherDevices($request->currentPassword);
            $logoutOtherDevices = $user->sessions()->where('id', '!=', session()->getId())->delete();
            if (!$logoutOtherDevices) {
                ActivityLog::create('Oops! Your other all device is not logout');
                return back()->with('error', "Oops! Your other all device is not logout");
            }
            ActivityLog::create('Logout other all devices is successfully.');
            return back()->with('success', "Logout other all devices is successfully.");
        } catch (Exception $e) {
            return back()->with("error", "Oops!, Something went wrong. Please try again...");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     * @return \Illuminate\Http\Response
     */
    public function logoutDevices($id)
    {
        try {
            $user = auth()->user();
            $session = $user->sessions()
                ->where('id', $id)
                ->delete();
            if (!$session) {
                ActivityLog::create('Oops! Your device is not logout');
                return back()->with('error', "Oops! Your device is not logout");
            }
            ActivityLog::create('Logout device is successfully');
            return back()->with("success", "Logout device is successfully.");
        } catch (Exception $e) {
            return back()->with("error", "Oops!, Something went wrong. Please try again...");
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
