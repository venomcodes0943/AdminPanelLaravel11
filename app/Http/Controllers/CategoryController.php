<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.show', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoryName' => 'required|unique:categories,categoryName',
            'categorySlug' => 'required|unique:categories,categorySlug',
        ]);

        $categorySlug = strtolower(str_replace(' ', '-', $request->categorySlug));
        $credential = [
            'categoryName' => $request->categoryName,
            'categorySlug' => $categorySlug,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        Category::create($credential);
        return redirect()->route('category.create')->with('success', 'Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', ['data' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $credential = $request->validate([
            'categoryName' => 'required|unique:categories,categoryName',
            'categorySlug' => 'required|unique:categories,categorySlug',
        ]);
        $categorySlug = strtolower(str_replace(' ', '-', $request->categorySlug));
        $credential['categorySlug'] = $categorySlug;
        $category = Category::findOrFail($id);
        $category->fill($credential);

        $category->save();
        return redirect()->route('category.index')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('deleted', true);
    }
}
