<?php

namespace App\Http\Controllers;

use App\Cate;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $user;

    /**
     * ProductController constructor.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function user()
    {


        $fooService = app()->make('Testing');
        return $fooService->allUser($this->user);

//        $user=User::find(1)->product->where('name','car')->first();
//        $users=User::find(1)->product;

//        return $user;
    }

    public function userName()
    {
//        working code one to many relationship.
        $widgets = User::find(1)->product->where('name', 'fan')->all();
        foreach ($widgets as $widget) {
            echo $widget->user->name;
        }
    }

    public function Accessor()
    {
//        working code AccessorTest
        $widgets = User::find(1)->product->where('name', 'fan')->all();
        foreach ($widgets as $widget) {
            echo $widget->created_at;
        }
    }

    public function accessorTest()
    {
//        working code one to many relationship.
        $widgets = User::find(1)->product->where('name', 'fan')->all();
        foreach ($widgets as $widget) {
            echo $widget->created_at;
        }

    }

    public function productTest()
    {
        //        working code EagerLoading.
        $widgets = User::with('product')->where('id', 1)->get();
        $typeobj = new \stdClass();
        $typeobj->product = $widgets;
//        $typeobj->books = (object)$widgets;
        return response()->json($typeobj);
    }

    public function catok()
    {
        $cats = Product::with(['category', 'user'])->where('category_id', 2)->get();
        $typeobj = new \stdClass();
        $typeobj->product = $cats;


        return response()->json(["data" => $typeobj]);

    }

    public function cat()
    {
        //code sample work on eagerloading with three table including nested.
        $cats = User::with(['product.category'])->where('id', 1)->get();

        $typeobj = new \stdClass();
        $typeobj->product = $cats;
//        $typeobj->product = $cats;

        return response()->json(["data" => $typeobj]);

    }

    public function testWork()
    {

        $cats = User::find(1)->user()->first();
        return $cats;

        $typeobj = new \stdClass();
        $typeobj->product = $cats;
//        $typeobj->product = $cats;

        return response()->json(["data" => $typeobj]);

    }
    public function manyThrough()
    {
//        test for hasmanyThrought

        $product = Cate::find(1);
        return $product->lists;
        return response()->json(["data" => $typeobj]);

    }
}
