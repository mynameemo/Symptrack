<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symptom;
use App\Models\UserSymptom;
use App\Models\UserData;

class SymptomController extends Controller
{
    public function symptoms()
    {
        $symptoms = Symptom::orderBy('name')->get();

        return view('symptoms.symptoms', compact('symptoms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'symptoms' => 'required|array',
            'symptoms.*.id' => 'required|exists:symptoms,id',
            'symptoms.*.severity' => 'nullable|integer|min:1|max:10',
            'symptoms.*.logged_at' => 'nullable|date',
        ]);

        $user = auth()->user();

        foreach ($request->symptoms as $symptom) {

            $exists = UserSymptom::where('user_id', $user->id)
                ->where('symptom_id', $symptom['id'])
                ->whereDate('logged_at', $symptom['logged_at'] ?? now())
                ->exists();

            if ($exists) {
                continue;
            }

            $data = [];

            foreach ($request->symptoms as $symptom) {
                $data[$symptom['id']] = [
                    'logged_at' => $symptom['logged_at'] ?? now()->toDateString(),
                    'severity' => $symptom['severity'] ?? 5,
                ];
            }

            $user->symptoms()->syncWithoutDetaching($data);
        }

        return redirect()->back()->with(
            'success',
            'Symptoms Saved Successfully!'
        );
    }

    public function storeUserData(Request $request)
    {
        $validated = $request->validate([
            'symptom_name' => 'required|string|max:60',
            'logged_at' => 'required|date',
            'severity' => 'required|integer|min:1|max:10',
            'duration_value' => 'required|integer|min:1|max:999',
            'duration_unit' => 'required|in:minutes,hours,days',
            'trigger_name' => 'required|string|max:60',
            'medication_name' => 'nullable|string|max:60',
            'medication_dosage' => 'nullable|string|max:40',
            'notes' => 'nullable|string|max:500',
        ]);

        $record = UserData::create([
            'user_id' => auth()->id(),
            'user_name' => auth()->user()->name,
            'symptom_name' => $validated['symptom_name'],
            'logged_at' => $validated['logged_at'],
            'severity' => $validated['severity'],
            'duration_value' => $validated['duration_value'],
            'duration_unit' => $validated['duration_unit'],
            'trigger_name' => $validated['trigger_name'],
            'medication_name' => $validated['medication_name'] ?? null,
            'medication_dosage' => $validated['medication_dosage'] ?? null,
            'notes' => $validated['notes'] ?? null,
        ]);
 
        return response()->json([
            'success' => true,
            'message' => 'Symptom saved successfully.',
            'data'    => $record->toFrontendArray(),
        ]);
    }


     /**
     * GET /user-data  (route name: user-data.index)
     * Used by the dashboard and symptom history pages to load saved
     * symptoms. Only returns rows for the signed-in user.
     */
    public function indexUserData()
{
    $rows = UserData::where('user_id', auth()->id())
        ->orderByDesc('logged_at')
        ->get()
        ->map->toFrontendArray()
        ->values();

    return response()->json([
        'success' => true,
        'data'    => $rows,
    ]);
}

public function destroyUserData(UserData $userData)
{
    if ($userData->user_id !== auth()->id()) {
        return response()->json([
            'success' => false,
            'message' => 'Not found.',
        ], 404);
    }

    $userData->delete();

    return response()->json(['success' => true]);
}

    
}