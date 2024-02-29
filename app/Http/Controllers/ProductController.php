<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;


class ProductController extends Controller
{
    public function index()
    {
        // Retrieve all products from the database
        $products = Products::all();

        // Pass the retrieved products data to the view
        return view('welcome', ['products' => $products]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'name'=>'required',
        'description'=>'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // adjust the max file size as needed
    ]);

    // Check if a file is present in the request
    if ($request->hasFile('image')) {
        // Generate a unique filename for the image
        $imageName = time() . '.' . $request->image->extension();

        // Move the uploaded file to the public/products directory
        $request->image->move(public_path('products'), $imageName);

        // Output the filename for testing purposes
        $product=new Products;
        $product->image=$imageName;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->save();
        return back()->withSuccess('Product Created');
    }
}
public function edit($id)
    {
        $product = Products::where('id', $id)->first();
        return view('edit', ['product' => $product]);
    }
}
