<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trigger;

class TriggerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

    $triggers = [
        'Stress',
        'Lack of sleep',
        'Caffeine',
        'Alcohol',
        'Dehydration',
        'Skipping meals',
        'Screen time',
        'Bright lights',
        'Loud noise',
        'Weather changes',
        'Physical exertion',
        'Anxiety',
    ];

    // Starter Dataset for Triggers

    foreach ($triggers as $trigger) {
        Trigger::firstOrCreate([
            'name' => $trigger
        ]);
    }

    }
}
