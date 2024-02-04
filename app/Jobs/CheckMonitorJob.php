<?php

namespace App\Jobs;

use App\Models\Monitor;
use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldBeUnique;
class CheckMonitorJob implements ShouldQueue, ShouldBeUnique
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected Monitor $monitor;

    /**
     * Create a new job instance.
     */
    public function __construct(Monitor $monitor)
    {
        $this->monitor = $monitor;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $client = new Client();
        $response = $client->get($this->monitor->url, [
            'http_errors' => false,
            'timeout' => $this->monitor->timeout,
        ]);

        $statusCode = $response->getStatusCode();
        $isAccessible = $statusCode >= 200 && $statusCode < 300;

        $this->monitor->checks()->create([
            'status_code' => $statusCode,
            'is_accessible' => $isAccessible,
        ]);
    }

    public function uniqueId()
    {
        return $this->monitor->id;
    }
}
