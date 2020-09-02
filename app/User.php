<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userName' ,'name', 'surname', 'email', 'password', 'userImage'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Relacion de uno a muchos Transaction
    public function transaction(){

        return $this->hasMany(Transaction::class);

    }

    //Relacion de uno a muchos usuarioProducto
    public function userProduct(){

        return $this->hasMany(UserProduct::class);

    }

    //Relacion de uno a muchos ProductComment
    public function productComment(){

        return $this->hasMany(ProductComment::class);

    }

    //Relacion de uno a UserAddress
    public function userAddress(){

        return $this->hasOne(UserAddress::class);
    }

    //Relacion de uno a Rol
    public function rol(){

        return $this->hasOne(Rol::class);
    }
}
