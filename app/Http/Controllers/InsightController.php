<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class InsightController extends Controller
{
    public function getInsight(Request $request)
{
    $user = auth()->user();

    $symptoms = UserData::where('user_id', $user->id)
        ->orderByDesc('logged_at')
        ->limit(20)
        ->get(['symptom_name', 'severity', 'trigger_name', 'logged_at']);

    if ($symptoms->isEmpty()) {
        return response()->json([
            'success' => true,
            'insight' => "You haven't logged any symptoms yet — add a few entries and check back here for patterns.",
        ]);
    }

    $conditions = [
        'medical' => $user->medicalConditions->pluck('name'),
        'mental_health' => $user->mentalHealthConditions->pluck('name'),
    ];

    $prompt = "This user has the following known conditions: " . json_encode($conditions) .
        ". Here is their recent symptom log (JSON): " . $symptoms->toJson() .
        ". In 3-4 short sentences, summarize any noticeable patterns, and mention if any symptoms seem " .
        "consistent with their known conditions. Be plain and friendly. " .
        "Do NOT diagnose any new condition or suggest treatment — end with a brief reminder to discuss patterns with a doctor.";

    try {
        $response = Http::timeout(40)->withHeaders([
            'x-goog-api-key' => config('services.gemini.key'),
            'Content-Type' => 'application/json',
        ])->post('https://generativelanguage.googleapis.com/v1beta/models/gemini-3.5-flash:generateContent', [
            'contents' => [[
                'parts' => [['text' => $prompt]],
            ]],
        ]);

        if (!$response->successful()) {
            Log::error('Gemini API failed', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Could not generate insight right now.',
            ], 500);
        }

        return response()->json([
            'success' => true,
            'insight' => $response->json('candidates.0.content.parts.0.text'),
        ]);

    } catch (Throwable $e) {
        Log::error('Insight generation threw an exception', [
            'message' => $e->getMessage(),
            'class' => get_class($e),
        ]);

        return response()->json([
            'success' => false,
            'message' => 'Something went wrong generating your insight.',
        ], 500);
    }

    }
}