<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NameProduct', 'Price', 'PriceXTime', 'QualificationAverage', 'Disponibility', 'ImageFormat', 'PublishedTime', 'Category'
    ];


    //Relacion de uno a muchos userProduct
    public function userProduct(){

        return $this->hasMany(UserProduct::class);

    }

    //Relacion de uno a muchos PransactionProduct
    public function transactionProduct(){

        return $this->hasMany(TransactionProduct::class);

    }

    //Relacion de uno a muchos ProductComment
    public function productComment(){

        return $this->hasMany(ProductComment::class);

    }

    //Relacion de uno a uno announcement
    public function announcementAddress(){

        return $this->hasOne(AnnouncementAddress::class);

    }

}
