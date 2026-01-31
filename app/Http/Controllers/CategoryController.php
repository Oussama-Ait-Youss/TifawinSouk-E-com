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
        //
        $categories = Category::all();
        return view('Categories.index',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    // Simply show the form view
    return view('Categories.create');
}

public function store(Request $request)
{
    // 1. Validate the input
    $validated = $request->validate([
        'name' => 'required|max:255',
        'slug' => 'required|unique:categories,slug',
        'description' => 'nullable',
    ]);

    // 2. Save using the fillable attributes you just set up
    Category::create($validated);
    $categories = Category::all();
    // 3. Redirect back to the list with a success message
    return view('Categories.index',compact('categories'));
}

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //
        // dd($category);
        return view('Categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Category $category)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'slug' => 'required|string|unique:categories,slug,' . $category->id,
    ]);

    $category->update($request->all());
    $categories=Category::all();
    // return redirect()->route('categories.index')->with('success', 'Category updated!');
    return view('Categories.index',compact('categories'));
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)

{
    
    $category->delete();
        $categories=Category::all();

return view('Categories.index',compact('categories'));}
}
