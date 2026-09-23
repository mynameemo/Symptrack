<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserSymptom;

class Medicine extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    public function symptomLogs()
{
    return $this->belongsToMany(
        UserSymptom::class,
        'user_symptom_medicines'
        )

     ->withTimestamps();
}
}
