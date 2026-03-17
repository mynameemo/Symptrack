<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class WTE extends Model
{
    use CrudTrait;
    //

    protected $fillable = [
        'wte_heading',
        'wte_description',
    ];
}
