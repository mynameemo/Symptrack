<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use CrudTrait;
    //

    protected $fillable = [
        'title',
        'description',
        'image',
        'is_active',
        'order',
    ];
}
