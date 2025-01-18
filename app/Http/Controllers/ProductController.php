<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function thankyou()
    {
        return view('thank-you');
    }
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

    private $staticProducts = [
        20 => [
            'id' => 20,
            'name' => 'Wireless Headphones',
            'price' => 120.00,
            'description' => 'High-quality wireless headphones with noise cancellation and 20-hour battery life.',
            'quantity' => 10,
            'image_path' => 'images/product1.webp',
        ],
        21 => [
            'id' => 21,
            'name' => 'Smartwatch Pro',
            'price' => 200.00,
            'description' => 'Track your fitness goals with this stylish smartwatch featuring heart rate monitoring and GPS.',
            'quantity' => 2,
            'image_path' => 'images/product2.avif',
        ],
        22 => [
            'id' => 22,
            'name' => 'Bluetooth Speaker',
            'price' => 80.00,
            'description' => 'Portable Bluetooth speaker with rich sound and water-resistant design for outdoor use.',
            'quantity' => 5,
            'image_path' => 'images/product3.webp',
        ],
        23 => [
            'id' => 23,
            'name' => 'Gaming Mouse',
            'price' => 50.00,
            'description' => 'Ergonomic gaming mouse with customizable RGB lighting and precision sensor.',
            'quantity' => 25,
            'image_path' => 'images/product4.webp',
        ],
    ];

    public function show($id)
    {
        $product = Product::find($id);

        if ($product) {
            return view('productDetails', compact('product'));
        }

        if (array_key_exists($id, $this->staticProducts)) {
            $product = (object) $this->staticProducts[$id];
            return view('productDetails', compact('product'));
        }

        abort(404, 'Product not found.');
    }
}
