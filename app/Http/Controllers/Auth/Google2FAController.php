<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Disable2faEmailUserRequest;
use App\Models\ActivityLog;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class Google2FAController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show form 2fa enable or disable the specified resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function show2faForm(Request $request)
    {
        $user = auth()->user();

        $google2fa_url = "";
        if (!empty($user->google2fa_secret)) {
            $google2fa = app('pragmarx.google2fa');
            //$twoFa = new Google2FA();
            $google2fa_url = $google2fa->getQRCodeInline(
                config('app.name'),
                $user->email,
                $user->google2fa_secret
            );
        }

        return view('auth.google2fa.2fa-show', compact('user', 'google2fa_url'));
    }
    /**
     * Generate 2fa secret a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function generate2faSecret(Request $request)
    {
        try {
            $user = auth()->user();
            // Initialise the 2FA class
            $google2fa = app('pragmarx.google2fa');

            // Add the secret key to the registration data
            $user->update([
                'google2fa_enable' => 0,
                'google2fa_secret' => $google2fa->generateSecretKey(),
            ]);

            ActivityLog::create('Google 2FA secret Key is generated');

            return back()->with('success', "Secret Key is generated, Please enable 2FA to your account by requiring more than just a password to log in");
        } catch (Exception $e) {
            return back()->with("error", "Oops!, Something went wrong. Please try again...");
        }
    }

    /**
     * Email 2FA for status the specified resource from storage..
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update2faEmailStatus(Request $request)
    {
        try {
            $status = 0;
            if ($request->status == 1) {
                $status = 0;
            } else {
                $status = 1;
            }
            $user = auth()->user();
            $update = $user->update(['is_2fa_status' =>  $status]);
            if ($update) {
                if ($status === 1) {
                    ActivityLog::create('2FA is enabled successfully');

                    return back()->with('success', '2FA is enabled Successfully.');
                } else {
                    ActivityLog::create('2FA is disabled successfully');

                    return back()->with('success', '2FA is disabled successfully.');
                }
            } else {
                return  back()->with('error', "Oops!, Something went wrong. Please try again.");
            }
        } catch (Exception $e) {
            return back()->with("error", "Oops!, Something went wrong. Please try again...");
        }
    }

    /**
     * Google 2FA for enable the specified resource from storage..
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function enable2fa(Request $request)
    {
        try {
            $user = auth()->user();
            // $google2fa = app('pragmarx.google2fa');
            // $secret = $request->get('one_time_password');
            // $valid = $google2fa->verifyKey($user->google2fa_secret, $secret);
            $user->update(['google2fa_enable' => 1]);
            if ($user) {
                ActivityLog::create('Google 2FA is enabled successfully');

                return back()->with('success', "Google 2FA is enabled successfully.");
            } else {
                ActivityLog::create('Invalid verification code, Please try again');

                return  back()->with('error', "Invalid verification Code, Please try again.");
            }
        } catch (Exception $e) {
            return back()->with("error", "Oops!, Something went wrong. Please try again...");
        }
    }

    /**
     * Google 2FA for disable the specified resource from storage.
     *
     * @param \Illuminate\Http\Request\Disable2faEmailUserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function disable2fa(Disable2faEmailUserRequest $request)
    {
         // Retrieve the validated input data...
         $validated = $request->validated();

        try {
            if (!(Hash::check($request->get('currentPassword'), auth()->user()->password))) {
                ActivityLog::create('Your  password does not matches with your account password. Please try again');

                // The passwords matches
                return back()->with("error", "Your  password does not matches with your account password. Please try again.");
            }
            $user = auth()->user();
            $user->update(['google2fa_enable' => 0]);

            ActivityLog::create('Google 2FA is now disabled');

            return back()->with('success', "Google 2FA is now disabled.");
        } catch (Exception $e) {
            return back()->with("error", "Oops!, Something went wrong. Please try again...");
        }
    }

    /**
     * Google 2FA for verfy the specified resource from storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function verfy2FA(Request $request)
    {
        try {
            $user = auth()->user();
            $google2fa = app('pragmarx.google2fa');
            $secret = $request->get('one_time_password');
            $valid = $google2fa->verifyKey($user->google2fa_secret, $secret);
            if ($valid) {
                ActivityLog::create('Google 2FA is verification successfully');

                return redirect()->route('dashboard')->with('success', "Google 2FA is verification successfully.");
            } else {
                ActivityLog::create('Invalid verification Google 2FA code, Please try again');

                return  back()->with('error', "Invalid verification code, Please try again.");
            }
        } catch (Exception $e) {
            return back()->with("error", "Oops!, Something went wrong. Please try again...");
        }
    }
}
