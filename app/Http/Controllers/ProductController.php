<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.show', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Category::all();
        return view('products.create', ['categoryData' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $credential = $request->validate([
            'title' => 'required',
            'discription' => 'required',
            'category_id' => 'required',
            'productDate' => 'required',
            'price' => 'required',
        ]);

        $credential['category_id'] = $request->category_id;
        $credential['gender'] = $request->gender;
        $credential['size'] = $request->size;
        $credential['vendor_id'] = 1;
        Product::create($credential);
        return redirect()->route('product.create')->with('success', "You're Product Added");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        echo $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        // $product = Product::findOrFail($id);
        // $product->delete();
        // return redirect()->route('product.index')->with('deleted', true);
        echo $id;
    }
}
