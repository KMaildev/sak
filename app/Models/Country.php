<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function parter_table()
    {
        return $this->hasMany(Partner::class);
    }
}
