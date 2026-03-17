<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Symptom;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    $symptoms = [
        "Headache", "Fever", "Fatigue", "Nausea", "Vomiting", "Dizziness", "Shortness of breath",
        "Chest pain", "Abdominal pain", "Cough", "Sore throat", "Sneezing", "Runny nose",
        "Blocked nose", "Back pain", "Joint pain", "Muscle pain", "Weakness", "Numbness",
        "Tingling", "Blurred vision", "Double vision", "Sensitivity to light", "Hearing loss",
        "Ringing in ears", "Loss of balance", "Heart palpitations", "Rapid heartbeat",
        "Slow heartbeat", "Swollen feet", "Swollen hands", "Swollen face", "Skin rash",
        "Itching", "Burning sensation", "Dry skin", "Hair loss", "Night sweats",
        "Cold sweats", "Shivering", "Weight loss", "Weight gain", "Loss of appetite",
        "Increased appetite", "Constipation", "Diarrhea", "Blood in stool",
        "Dark urine", "Frequent urination", "Painful urination", "Blood in urine",
        "Difficulty urinating", "Excessive thirst", "Dry mouth", "Swollen glands",
        "Difficulty swallowing", "Hoarse voice", "Bloating", "Gas", "Indigestion",
        "Heartburn", "Chest tightness", "Wheezing", "Skin redness", "Bruising",
        "Bleeding gums", "Nosebleeds", "Dry eyes", "Watery eyes", "Eye pain",
        "Eye redness", "Confusion", "Memory loss", "Trouble concentrating",
        "Irritability", "Mood swings", "Anxiety", "Depression",
        "Insomnia", "Excessive sleepiness", "Tremors", "Seizures",
        "Loss of coordination", "Fainting", "Low blood pressure", "High blood pressure",
        "Cold extremities", "Hot flashes", "Chest burning", "Stomach cramps",
        "Pelvic pain", "Lower back stiffness", "Neck pain", "Shoulder pain",
        "Arm weakness", "Leg weakness", "Difficulty breathing",
        "Pain when moving", "Swollen joints", "Stiff joints",
        "Excessive sweating", "Dry coughing", "Wet coughing",
        "Sharp abdominal pain", "Stabbing headache", "Throbbing headache",
        "Pain behind the eyes", "Sensitivity to sound", "Loss of smell",
        "Loss of taste", "Swollen tonsils", "White patches on throat",
        "Yellowing of skin", "Yellowing of eyes", "Fast breathing",
        "Slow breathing", "Hair thinning", "Nail discoloration",
        "Nail brittleness", "Cold intolerance", "Heat intolerance",
        "Swollen lymph nodes", "Tight muscles", "Muscle twitching",
        "Burning urine", "Lower abdominal pressure",
        "Chest pressure", "Forehead pain", "Jaw pain",
        "Ear pain", "Hip pain", "Knee pain", "Ankle pain",
        "Foot pain", "Hand pain", "Finger numbness",
        "Toe numbness", "Leg cramping", "Hand cramping",
        "Tongue swelling", "Lip swelling", "Face tingling",
        "Choking sensation", "Sudden fatigue", "Unsteady walking",
        "Visual floaters", "Eye twitching", "Stomach burning",
        "Rectal bleeding", "Dark stool", "Cramping after eating",
        "Chest discomfort", "Upper back pain", "Lower back pain",
        "Pain radiating to arm", "Pain radiating to neck",
        "Pain radiating to back", "Difficulty focusing",
        "Panic episodes", "Restlessness", "Forgetfulness",
        "Feeling faint", "General malaise", "Body aches",
        "Flushing", "Cold skin", "Pale skin", "Bluish lips",
        "Rapid breathing", "Slow digestion", "Stomach fullness",
        "Heel pain", "Calf pain", "Inner thigh pain",
        "Outer thigh pain", "Breast tenderness", "Cramps",
        "Pain after eating", "Skin peeling", "Mouth sores",
        "Tongue pain", "Teeth sensitivity", "Jaw stiffness",
        "Back stiffness", "Chest heaviness", "Clammy skin",
        "Worsening cough", "Persistent cough", "Green mucus",
        "Yellow mucus", "Bloody mucus", "Dry throat",
        "Burning throat", "Cold-like symptoms", "Flu-like symptoms",
        "Worsening tiredness", "Persistent nausea", "Sharp chest pain"
    ];

    foreach ($symptoms as $symptom) {
    Symptom::firstOrCreate(['name' => ucfirst(strtolower($symptom))]);
}

    }

}
