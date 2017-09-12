<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = "categories";

    public function product()
    {
        return $this->hasMany("App\Product",'category_id');
    }

    public function user()
    {
        return $this->hasMany("App\User");
    }

    public function lists()
    {
        return $this->hasManyThrough('App\User', "App\Product");
    }
}
