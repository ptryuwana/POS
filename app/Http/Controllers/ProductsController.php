<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function foodBeverage(){
        return view('products_fnb');
    }
    public function beautyHealth(){
        return view('products_bnh');
    }
    public function homeCare(){
        return view('products_hnc');
    }
    public function babyKid(){
        return view('products_bnk');
    }
}
