<?php

namespace App\Console\Commands;

use App\Enums\MonitorStatus;
use App\Jobs\CheckMonitorJob;
use App\Models\Monitor;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckMonitorsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-monitors';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It dispatches a job to check all monitors.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Checking monitors...');
        $monitors = Monitor::query()
            ->where('status', MonitorStatus::ACTIVE)
            ->whereDoesntHave('checks', function ($query) {
                $query->where('created_at', '>=', DB::raw('DATE_SUB(NOW(), INTERVAL monitors.interval MINUTE)'));
            })
            ->get();
        
        $this->withProgressBar($monitors, function ($monitor) {
            CheckMonitorJob::dispatch($monitor);
        });
    }
}
