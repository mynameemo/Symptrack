<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    use CrudTrait;
    //

    protected $fillable = [
        'contact_number1',
        'contact_number2',
    ];
}
