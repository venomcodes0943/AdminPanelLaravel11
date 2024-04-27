<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $products = Product::latest()->simplePaginate(15);
        return view('customer.index', ['products' => $products]);
    }


    public function productDetail(string $id)
    {
        $product = Product::findOrFail($id);
        return view('customer.product-detail', ['product' => $product]);
    }

    public function show()
    {
        $products = Product::simplePaginate(12);
        return view('customer.products', ['products' => $products]);
    }
    public function wishlistAll()
    {
        // session()->forget('wishlist');
        return view('customer.wishlist');
    }
    public function wishlist(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return back()->with('error', true);
        }

        $wishlist = session()->get('wishlist', []);

        if (array_key_exists($id, $wishlist)) {
            return back()->with('beenThere', true);
        } else {
            $wishlist[$id] = [
                'id' => $product->id,
                'title' => $product->title,
                'category' => $product->category->categoryName,
                'image' => $product->image,
                'price' => $product->price,
                'quantity' => $request->quantity,
            ];
        }
        session()->put('wishlist', $wishlist);
        return back()->with('addtowish', true);
    }
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return back()->with('error', true);
        }
        $cart = session()->get('cart', []);

        if (array_key_exists($id, $cart)) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'title' => $product->title,
                'image' => $product->image,
                'price' => $product->price,
                'quantity' => $request->quantity,
            ];
        }
        session()->put('cart', $cart);
        return back()->with('success', true);

    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->route('customer.index')->with('success', true);
    }


    public function checkout()
    {
        return view('customer.checkout');
    }

    public function clearSingleSession($itemId, $sessionName)
    {
        $sessionData = session()->get($sessionName, []);

        if (array_key_exists($itemId, $sessionData)) {
            unset($sessionData[$itemId]);

            if (empty($sessionData)) {
                session()->forget($sessionName);
                return back();
            } else {
                session()->put($sessionName, $sessionData);
                return back();
            }
        } else {
            return redirect()->route('customer.index')->with('error', 'Item not found in ' . $sessionName . '.');
        }
    }



}
