<?php

namespace App\Enums;

enum MonitorStatus: string
{
    case ACTIVE = 'active';
    case PAUSED = 'paused';
}
