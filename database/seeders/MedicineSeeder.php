<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Medicine;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

    $medicines = [
        'Paracetamol',
        'Ibuprofen',
        'Aspirin',
        'Diclofenac',
        'Amoxicillin',
        'Azithromycin',
        'Cetirizine',
        'Loratadine',
        'Omeprazole',
        'Metformin',
        'Salbutamol',
        'Cough Syrup (Dextromethorphan)',
        'ORS (Oral Rehydration Salts)',
        'Vitamin C',
        'Zinc Tablets',
        'Antacid (Magnesium Hydroxide)',
        'Hydrocortisone Cream',
        'Insulin',
        'Clindamycin',
        'Naproxen',
];

foreach ($medicines as $name){
    Medicine::firstOrCreate(['name' => $name]);
}
    }
}
