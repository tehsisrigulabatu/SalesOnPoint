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
        
        return view('mcategory', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create', ['type' => 'category']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi dulu
        $request->validate([
            'name' => 'required|string|min:10',
        ]);

        // Simpan ke database
        Category::create([
            'name' => $request->name,
        ]);

        // Redirect balik ke index + kasih pesan sukses
        return redirect('/category')->with('success', 'Category Added Successfully!');
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
    public function edit($id)
    {
        //get product by ID
        $category = Category::findOrFail($id);

        //render view with product
        return view('edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Update category
        $category->name = $request->input('name');
        $category->save();

        // Redirect atau kembalikan response
        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Item deleted!');
    }
}
