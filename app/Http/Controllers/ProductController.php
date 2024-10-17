<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products; // Assuming you have a Product model

class ProductController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:1000',
            'volume' => 'required|numeric',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric'
        ]);

        // Create a new product and store it in the database
        products::create([
            'name' => $validated['name'],
            'type' => $validated['type'],
            'volume' => $validated['volume'],
            'price' => $validated['price'],
            'quantity' => $validated['quantity']
        ]);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Product added successfully!');
    }

    public function index()
    {
        // Retrieve all products from the 'products' table
        $products = products::all();

        // Pass the products to the view
        return view('Admin.listProduct', compact('products'));  // lowercase 'products'
    }

    public function selectProduct(Request $request)
{
    // Validate the selected product ID
    $request->validate([
        'product' => 'required|exists:products,id',
    ]);

    // Retrieve the selected product using the ID
    $product = Products::find($request->product);

    // Process the selected product (for example, show product details)
    return redirect()->back()->with('success', 'You selected: ' . $product->name);
}

public function showOrderForm()
{
    // Retrieve all products from the 'products' table
    $products = Products::all();

    // Pass the products to the 'Staff.Order' view
    return view('Staff.Order', compact('products'));
}


}
