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
        'NameProduct', 'price', 'QualificationAverage', 'Disponibility', 'ImageFormat', 'PublishedTime', 'Category'
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

    //Relacion de muchos desde Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
