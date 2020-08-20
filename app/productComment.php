<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content', 'qualification', 'publisedTime'
    ];


    //Relacion de muchos desde Announcement
    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }

    //Relacion de muchos desde User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
