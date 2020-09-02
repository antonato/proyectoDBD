<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProduct extends Model
{

    protected $fillable = [
        'user_id', 'announcement_id'
    ];

    //relacion de muchos desde User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //relacion de muchos desde Announcement
    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }

}
