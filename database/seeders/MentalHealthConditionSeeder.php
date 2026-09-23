<?php

namespace Database\Seeders;

use App\Models\MentalHealthCondition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MentalHealthConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conditions = [
            "Anxiety Disorder",
            "Depression",
            "Bipolar Disorder",
            "Post-Traumatic Stress Disorder (PTSD)",
            "Obsessive-Compulsive Disorder (OCD)",
            "Panic Disorder",
            "Social Anxiety Disorder",
            "Specific Phobia",
            "Eating Disorder",
            "Attention-Deficit/Hyperactivity Disorder (ADHD)",
            "Autism Spectrum Disorder (ASD)",
            "Schizophrenia",
            "Borderline Personality Disorder",
            "Insomnia Disorder",
            "Substance Use Disorder"
        ];

        foreach ($conditions as $condition) {
            MentalHealthCondition::firstOrCreate([
                'name' => $condition
            ]);
        }
    }
}