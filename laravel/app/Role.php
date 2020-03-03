<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     /**
     * baut beziehung zu user auf
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
