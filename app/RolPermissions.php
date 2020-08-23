<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolPermissions extends Model
{
    public function permissions()
    {
        return $this->belongsTo(Permissions::class);
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }
}
