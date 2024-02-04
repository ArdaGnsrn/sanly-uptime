<?php

namespace Database\Seeders;

use App\Models\Monitor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Monitor::create([
            'user_id' => 1,
            'name' => "Koleranın Hayalleri",
            'url' => "https://httpstat.us/200",
        ]);
        Monitor::create([
            'user_id' => 1,
            'name' => "Sagonun Hayalleri",
            'url' => "https://httpstat.us/400",
        ]);
    }
}
