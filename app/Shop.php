<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function history()
    {
        return $this->hasMany("App\History");
    }
}
