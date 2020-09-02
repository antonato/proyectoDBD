<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnnouncementAddress extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country', 'region', 'street'
    ];

    public function transaction()
    {
        return $this->belongsTo(Announcement::class);
    }
}
