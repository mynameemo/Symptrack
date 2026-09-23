<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MentalHealthCondition extends Model
{
    //

    protected $fillable = ['name', 
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_mental_health_conditions')
                    ->withPivot('notes')
                    ->withTimestamps();
    }
}

