<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Trigger extends Model
{
    use CrudTrait;
    //

    public function users(){
        return $this->belongsToMany(User::class, 'user_triggers')
        ->withPivot(['logged_at'])
        ->withTimestamps();
    }
}
