<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $product = Product::where('price', '>', 1000)->get();
        return view('admin.index', ['product' => $product]);
    }
}
