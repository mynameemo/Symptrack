<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use CrudTrait;
    //

    protected $fillable = [
        'person_name',
        'person_email',
        'person_message',
    ];
}
