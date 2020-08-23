<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    //relacion de uno a muchos Rol_Permissions
    public function rolPermissions()
    {
        return $this->hasMany(RolPermissions::class);
    }

    //relacion de uno desde User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
