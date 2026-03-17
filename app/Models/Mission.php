<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use CrudTrait;
    //

    protected $fillable = [
        'mission_image',
        'mission_title',
        'mission_description',
    ];
}
