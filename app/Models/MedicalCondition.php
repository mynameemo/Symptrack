<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalCondition extends Model
{
    //

    protected $fillable = [
        'name', 
        ]; 

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_medical_conditions')
                    ->withPivot('notes')
                    ->withTimestamps();
    }
}

