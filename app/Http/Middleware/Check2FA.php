<?php

namespace App\Http\Middleware;

use App\Models\ActivityLog;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Check2FA
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user not 2fa
        if (!session()->has('is_user_2fa') && $request->user()->isVerified2FA()) {
            
            ActivityLog::create('2FA is not verified');
            return redirect()->route('2fa.index');
        }
        return $next($request);
    }
}
