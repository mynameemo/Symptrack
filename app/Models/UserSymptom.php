<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class UserSymptom extends Model
{
    use CrudTrait;
    protected $table = 'user_symptoms';

    protected $fillable = [
        'user_id',
        'symptom_id',
        'severity',
        'logged_at',
    ];

    protected $casts = [
        'logged_at' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function symptom()
    {
        return $this->belongsTo(Symptom::class);
    }
}