<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use CrudTrait;
    //
    protected $fillable = [
        'about_image',
        'about_title',
        'about_description',
    ];
}
