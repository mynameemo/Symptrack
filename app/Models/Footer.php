<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use CrudTrait;
    //

    protected $fillable = [
        'footer_title',
        'footer_description',
        'footer_email',
        'footer_phone',
        'footer_address',
        'footer_image',
    ];
}
