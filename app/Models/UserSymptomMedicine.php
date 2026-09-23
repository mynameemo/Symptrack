<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSymptomMedicine extends Model
{
    //
    protected $fillable = [
        'user_symptom_id',
        'medicine_id',
    ];

    public function userSymptom()
    {
        return $this->belongsTo(UserSymptom::class);
    }

    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }
}
