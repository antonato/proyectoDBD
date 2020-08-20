<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
        /**
        * The attributes that are mass assignable.
        *
        * @var array
        */
        protected $fillable = [
            'since', 'to', 'DateTransaction'
        ];

        //Relacion de uno a muchos Transaction
        public function transactionProduct()
        {
            return $this->hasMany(TransactionProduct::class);
        }

        //Relacion de uno a PaymentMethod
        public function paymentMethod()
        {
            return $this->hasOne(PaymentMethod::class);
        }

        //Relacion de muchos desde User
        public function user()
        {
            return $this->belongsTo(User::class);
        }


}
