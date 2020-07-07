<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index() {
        $products_getter = Product::all();
        // dd($products_getter);
        return view('products', ['products_swing' => $products_getter]);
    }
}
