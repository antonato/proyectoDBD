<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionProduct extends Model
{
    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
