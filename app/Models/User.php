<?php

namespace App\Models;

use App\Jobs\SendEmail2FACodeVerificationJob;
use App\Jobs\SendPasswordResetLinkJob;
use App\Jobs\SendVerifyEmailJob;
use DateTimeInterface;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'address',
        'code',
        'is_2fa_status',
        'google2fa_enable',
        'google2fa_secret',
        'email',
        'password',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'google2fa_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Accessor for generating the full name with proper capitalization.
     *
     * @return string The full name with the first letter of each name capitalized.
     */
    public function getFullNameAttribute()
    {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }

    /**
     *  generating the 2fa code.
     *
     * @return response() The full name with the first letter of each name capitalized.
     */
    public function generate2FACode()
    {
        $code = rand(1000, 9999);
        $user = auth()->user();
        $user && auth()->user()->update(
            ['code' => $code]
        );

        // Email Details
        $details = [
            'subject' => 'Please verify your 2FA',
            'code' => $code,
            'email' => $user->email,
        ];

        //Send email
        dispatch(new SendEmail2FACodeVerificationJob($details));

        ActivityLog::create(' 2FA code generated successfully');
        return $user;
    }

    /**
     * Verified for generated the 2FA code.
     *
     * @return boolean True | false .
     */
    public function isVerified2FACode($code = 0)
    {
        return auth()->user() && auth()->user()->where('code', $code)
            ->where('updated_at', '>=', now()->subMinutes(2))
            ->first();;
    }

    /**
     * Check for the 2FA status active.
     *
     * @return boolean True | false .
     */
    public function scopeActive($q)
    {
        return $q->where('is_2fa_status', 1);
    }

    /**
     * Verified for status the 2FA code.
     *
     * @return boolean True | false .
     */
    public function isVerified2FA()
    {
        return auth()->user() && auth()->user()->is_2fa_status === 1 ? auth()->user() : false;
    }

    /**
     * Verified for status the 2FA code.
     *
     * @return string  $barcode.
     */
    public function isGoogle2faBarcode()
    {
        return auth()->user() && auth()->user()->google2fa_enable === 1 ? get_google_2fa_barcode(auth()->user()->email, auth()->user()->google2fa_secret) : false;
    }

    /**
     * Get the comments for the blog post.
     *
     */
    public function sessions(): HasMany
    {
        return $this->hasMany(Session::class);
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        ActivityLog::create('Sent email verification notification successfully');
        // dispactches the job to the queue passing it this User object
        SendVerifyEmailJob::dispatch($this);
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        ActivityLog::create('Sent password reset Notification successfully');
        // dispactches the job to the queue passing it this User object
        SendPasswordResetLinkJob::dispatch($this, $token);
    }

    /**
     * Get the Activity Logs for the user.
     *
     */
    public function activity_log(): HasMany
    {
        return $this->hasMany(ActivityLog::class);
    }

    /**
     * Scope a query to only include get activity Logs.
     *
     */
    public function scopeGetUsers()
    {
        return $this->select('*')->latest();
    }

    /**
     * Prepare a date for array / JSON serialization.
     */
    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d h:i A');
    }
}
