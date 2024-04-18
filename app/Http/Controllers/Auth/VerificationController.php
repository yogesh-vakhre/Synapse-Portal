<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the form for email verification notice a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : view('auth.verify');
    }

    /**
     * Verify the form for the email verification resource in storage.
     *
     * @param  \Illuminate\Http\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verify(EmailVerificationRequest $request)
    {
        try {
            $request->fulfill();

            //generate 2fa code
            $request->user()->generate2FACode();
            return redirect()->route('2fa.index')
                ->with('success', 'Your email verification successfully');
        } catch (Exception $e) {
            return back()->with('error', 'Oops!, Something went wrong. Please try again.');
        }
    }

    /**
     * Resend the form for the email verification link.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resend(Request $request)
    {
        try {
            if ($request->user()->hasVerifiedEmail()) {
                return redirect($this->redirectPath());
            }
            $request->user()->sendEmailVerificationNotification();

            return back()->with('success', 'A fresh verification link has been sent to your email address!');
        } catch (Exception $e) {
            return back()->with('error', 'Oops!, Something went wrong. Please try again.');
        }
    }
}
