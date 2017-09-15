<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected  $table='hsitorys';
    public function shop()
    {
        return $this->belongsTo("App\Shop");
    }

    public function item()
    {
        return $this->belongsTo("App\Item");
    }
}
