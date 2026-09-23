<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTrigger extends Model
{
    //
    protected $fillable = [
        'user_id',
        'trigger_id',
        'logged_at',
    ];

    protected $casts = [
        'logged_at' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trigger()
    {
        return $this->belongsTo(Trigger::class);
    }
}
