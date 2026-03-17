<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    use CrudTrait;
    //


    protected $fillable =[
        'name',
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'user_symptoms')
        ->withPivot(['logged_at', 'severity'])
        ->withTimestamps();
    }

}
