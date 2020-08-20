<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'postalCode', 'country', 'region', 'street'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
