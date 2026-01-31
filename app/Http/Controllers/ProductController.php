<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
// use App\Models\Product;
use Illuminate\Http\Request;


use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('Products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    // This points to resources/views/categories/create.blade.php
    // $products = Product::all();
    $categories = Category::all();

    return view('Products.create',compact('categories'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $validated = $request->validate([
        'name' => 'required',
        'category_id' => 'required',
        'price' => 'required',
        'stock' => 'required',
        'description' => 'required'
    ]);
    Product::create($validated);
    $categories = Category::all();
    $products = Product::all();


    return view('Products.index',compact('products','categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // dd($product);
        // $products = Product::all();
        $categories = Category::all();
        return view('Products.edit',compact('product','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // dd($request);

        $request->validate([
        'name' => 'required',
        'price' => 'required',
        'description' => 'required'
    ]);

    $product->update($request->all());

    $products = Product::all();
                return view('Products.index',compact('products'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $produc)
    {
        $produc->delete();
        $products = Product::all();
        // dd($produc);
        // return view('Products.index',compact('products'));
        return redirect('/products');

    }
}

