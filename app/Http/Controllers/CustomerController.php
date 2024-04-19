<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $products = Product::simplePaginate(15);
        return view('customer.index', ['products' => $products]);
    }


    public function productDetail(string $id)
    {
        $product = Product::findOrFail($id);
        return view('customer.product-detail', ['product' => $product]);
    }
}
