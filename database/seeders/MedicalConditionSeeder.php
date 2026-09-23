<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MedicalCondition;

class MedicalConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $conditions = [
            "Asthma",
            "Diabetes",
            "Hypertension",
            "Migraine",
            "Epilepsy",
            "Arthritis",
            "Heart Disease",
            "Chronic Kidney Disease",
            "Gastroesophageal Reflux Disease (GERD)",
            "Irritable Bowel Syndrome (IBS)",
            "Anemia",
            "Thyroid Disorder",
            "Chronic Obstructive Pulmonary Disease (COPD)",
            "Eczema",
            "Psoriasis",
            "Allergies",
            "Osteoporosis",
            "Endometriosis",
            "Polycystic Ovary Syndrome (PCOS)",
            "Chronic Fatigue Syndrome"
        ];

        foreach ($conditions as $condition) {
            MedicalCondition::firstOrCreate([
                'name' => $condition
            ]);
        }
    
    }
}
