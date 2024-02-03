<?php

namespace Database\Seeders;

use App\Models\EmailTracker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmailTrackerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmailTracker::create([
            'processed_emails' => 0,
        ]);
    }
}
