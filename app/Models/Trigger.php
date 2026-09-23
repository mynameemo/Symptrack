<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Trigger extends Model
{
    use CrudTrait;
    //

    public function userTriggers()
{
    return $this->hasMany(UserTrigger::class);
}
}
