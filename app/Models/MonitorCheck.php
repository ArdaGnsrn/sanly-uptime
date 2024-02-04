<?php

namespace App\Models;

use App\Traits\AutoLogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class MonitorCheck extends Model
{
    protected $fillable = [
        'monitor_id',
        'status_code',
        'is_accessible',
    ];

    protected $casts = [
        'is_accessible' => 'boolean',
    ];
}
