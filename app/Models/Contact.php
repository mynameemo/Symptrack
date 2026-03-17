<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use CrudTrait;
    //

    protected $fillable = [
        'contact_email1',
        'contact_email2',
    ];
}
