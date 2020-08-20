<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'subCategory'
    ];

    //Relacion de uno a muchos Announcement
    public function announcement(){

        return $this->hasMany(Announcement::class);

    }
}


