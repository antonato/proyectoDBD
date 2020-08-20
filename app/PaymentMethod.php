<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cardType', 'cardNumber', 'createAt',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
