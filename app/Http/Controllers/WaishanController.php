<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class WaishanController extends Controller
{
    public function index()
    {
//        $shop = Shop::find(1);
//        $item = $shop->history;
        $cats = Shop::with('history.item')->where('id', 2)->get();
        foreach ($cats as $cat) {
            echo $cat;
        }
//        return $cats;

    }
}
