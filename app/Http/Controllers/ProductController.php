<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'productName' => 'required|string|max:255',
            'productPrice' => 'required|numeric|min:0',
            'productQuantity' => 'required|integer|min:1',
            'productDescription' => 'required|string',
            'productImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);


        // Handle file upload
        $imagePath = $request->file('productImage')->store('products', 'public');

        Product::create([
            'name' => $request->productName,
            'price' => $request->productPrice,
            'quantity' => $request->productQuantity,
            'description' => $request->productDescription,
            'image_path' => $imagePath, // Save the file path
        ]);

        return redirect()->route('products')->with('success', 'Product added successfully!');
    }

    public function index()
    {
        $products = Product::all(); // Fetch all products
        return view('products', compact('products')); // Pass products to the view
    }
}
