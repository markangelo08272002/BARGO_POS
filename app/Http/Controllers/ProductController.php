<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // Display a listing of the products
        public function index()
    {
        $products = Product::with('category')->get();
        $categories = Category::all(); // Get all categories

        return view('products.Display', compact('products', 'categories'));
    }


    // Show the form for creating a new product
    public function create()
    {
        $categories = Category::all();  // Fetch all categories
        return view('products.form', compact('categories'));  // Pass categories to the view
    }

    // Store a newly created product in storage
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'unit' => 'required|integer',
            'price' => 'required|numeric',
            'qty' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    // Display the specified product
    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('products.show', compact('product'));
    }

    // Show the form for editing the specified product
    public function edit($id)
    {
        $product = Product::findOrFail($id);  // Fetch the product to be edited
        $categories = Category::all();  // Fetch all categories
        return view('products.edit', compact('product', 'categories'));  // Pass product and categories to the view
    }



    // Update the specified product in storage
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'product_name' => 'required|string',
            'unit' => 'required|string',
            'price' => 'required|numeric',
            'qty' => 'required|integer',
            'category_id' => 'required|exists:categories,id', // Ensure category exists
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'product_name' => $validated['product_name'],
            'unit' => $validated['unit'],
            'price' => $validated['price'],
            'qty' => $validated['qty'],
            'category_id' => $validated['category_id'], // Update the category
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // Remove the specified product from storage
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
