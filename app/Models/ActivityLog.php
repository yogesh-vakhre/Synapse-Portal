<?php

namespace App\Models;

use DateTimeInterface;
use GuzzleHttp\Psr7\Response;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityLog extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'subject', 'url', 'method', 'ip', 'agent', 'user_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'deleted_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the user that owns the ActivityLog.
     *
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Activity Log for create user.
     *
     * @return string  $subject.
     */
    public  static  function create($subject = '')
    {
        return static::query()->create([
            'subject' => $subject,
            'url' => request()->fullUrl(),
            'method' => request()->method(),
            'ip' => request()->ip(),
            'agent' => request()->header('user-agent'),
            'user_id' => auth()->check() ? auth()->user()->id : null,
        ]);
    }

    /**
     * Prepare a date for array / JSON serialization.
     */
    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d h:i A');
    }

    /**
     * Scope a query to only include get activity Logs.
     *
     */
    public function scopeGetActivityLogs()
    {
        return $this->with('user')->select('*')->latest();
    }

    /**
     * Scope a query to only include get your activity Logs.
     *
     */
    public function  scopeGetYourActivityLogs()
    {
        return $this->with('user')->where('user_id', auth()->user()->id)->select('*')->latest();
    }

    /**
     *  Scope a query to only include get only trashed activity Logs.
     *
     */
    public function scopeGetOnlyTrashedActivityLogs()
    {
        return $this->onlyTrashed()->with('user')->select('*')->latest();
    }
}
