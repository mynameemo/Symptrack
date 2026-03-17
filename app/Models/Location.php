<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use CrudTrait;
    //

    protected $fillable = [
        'contact_heading',
        'contact_information',
        'contact_option',
    ];
}
