<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symptom;

class SymptomController extends Controller
{
    //

    

    public function symptoms(){
        $symptoms = Symptom::orderBy('name')->get(); // fetches all symptoms
        return view('symptoms.symptoms', compact('symptoms')); // returns the symptoms view/routes
    }

    public function store(Request $request){
        $request->validate([
            'symptoms' => 'required|array',
            'symptoms.*.id' => 'required|exists:symptoms,id',
            'symptoms.*.severity' => 'nullable|integer|min:1|max:10',
            'symptoms.*.logged_at' => 'nullable|date',
        ]);

        $user = auth()->user();

        $data = [];
        foreach ($request->symptoms as $symptom) {
            $data[$symptom['id']] = [
                'logged_at' => $symptom['logged_at'] ?? now(),
                'severity' => $symptom['severity'] ?? 5,
            ];
        }

        $user->symptoms()->syncWithoutDetaching($data);

        return redirect()->back()->with('success', 'Symptoms Saved Successfully!');
    }

    
}
