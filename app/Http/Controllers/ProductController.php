<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search = request('search');
        $products = Product::latest()->search($search)->simplePaginate(10);
        $categories = Category::all();
        return view('products.show', ['products' => $products, 'categories' => $categories]);
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
        $credential = $request->validate([
            'title' => 'required',
            'discription' => 'required',
            'category_id' => 'required',
            'productDate' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('/images', $imageName);
            $credential['image'] = $imageName;
        }
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
        $product = Product::findOrFail($id);
        $category = Category::all();
        return view('products.edit', ['product' => $product, 'categoryData' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credential = $request->validate([
            'title' => 'required',
            'discription' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $credential['gender'] = $request->gender;
        $credential['size'] = $request->size;
        $credential['vendor_id'] = 1;
        $credential['updated_at'] = now();
        $product = Product::findOrFail($id);
        $product->fill($credential);

        if ($request->hasFile('image')) {
            // Delete previous image if it exists
            if ($product->image) {
                Storage::delete('/images/' . $product->image);
            }

            // Store the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('/images', $imageName);

            // Update the product's image attribute
            $product->image = $imageName;
        }
        $product->save();
        return redirect()->route('product.index')->with('updated', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('deleted', true);
    }
}
