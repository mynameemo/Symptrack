<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use CrudTrait;
    //

    protected $fillable = [
        'value_title',
        'value_description',
    ];
}
