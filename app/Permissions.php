<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $fillable = ['create', 'read', 'update', 'delete'];

    //Relacion de uno a muchos RolPermissions
    public function rolPermissions(){

        return $this->hasMany(RolPermissions::class);
        
    }

}