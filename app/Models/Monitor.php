<?php

namespace App\Models;

use App\Enums\MonitorStatus;
use App\Traits\AutoLogsActivity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Monitor extends Model
{
    use AutoLogsActivity, SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'url',
        'interval',
        'timeout',
    ];

    protected $casts = [
        'status' => MonitorStatus::class
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function checks(): HasMany
    {
        return $this->hasMany(MonitorCheck::class);
    }
}
