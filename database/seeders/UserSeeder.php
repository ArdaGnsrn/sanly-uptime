<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "first_name" => "Sagopa",
            "last_name" => "Kajmer",
            "phone" => "+905414476180",
            "email" => "sagopakajmer@gmail.com",
            "password" => Hash::make("kafkef")
        ]);
    }
}
