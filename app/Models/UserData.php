<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    //
    
    protected $table = 'user_data';

    protected $fillable = [
        'user_id',
        'user_name',
        'symptom_name',
        'logged_at',
        'severity',
        'duration_value',
        'duration_unit',
        'trigger_name',
        'medication_name',
        'medication_dosage',
        'notes',
    ];

    protected $casts = [
        'logged_at' => 'datetime',
        'severity' => 'integer',
        'duration_value' => 'integer',
    ];

    public function toFrontendArray(): array
    {
        return [
            'id'       => (string) $this->id,
            'name'     => $this->symptom_name,
            'date'     => optional($this->logged_at)->toIso8601String(),
            'severity' => $this->severity,
            'duration' => [
                'value' => $this->duration_value,
                'unit'  => $this->duration_unit,
            ],
            'trigger'    => $this->trigger_name,
            'medication' => $this->medication_name
                ? ['name' => $this->medication_name, 'dosage' => $this->medication_dosage]
                : null,
            'notes'     => $this->notes,
            'createdAt' => optional($this->created_at)->toIso8601String(),
        ];
    }
}
