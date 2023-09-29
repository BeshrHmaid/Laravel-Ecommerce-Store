<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $prod= new Product;
        $prod->user_id=0;
        $prod->name=$request->product_name;
        $prod->price=$request->price;
        

        // Handle file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
            // Save $imagePath to the database or use it as needed
            $prod->path = $imagePath;
        }
        if ($prod->save()) {
            // Product saved successfully
            return redirect('/admin/product/create')->with('success', 'Product created successfully');
        } else {
            // Product save failed, provide an error message
            return redirect('/admin/product/create')->with('error', 'Product creation failed');
        }
        
    }


/**
 * Display the specified resource.
 */
public function show($id)
{
    $product=Product::find($id);
    return view('product.show',compact('product'));
}

/**
 * Show the form for editing the specified resource.
 */
public function edit($id)
{
    $product=Product::find($id);
    return view('product.update',compact('product'));
}

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, int $id)
{
    // Find the product by ID
    $product = Product::find($id);

    // Validate the form data
    $request->validate([
        'product_name' => 'required|string|max:255',
        'price' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust allowed file types and size as needed
    ]);

    $product->name=$request->product_name;
    $product->price=$request->price;
    // Handle file upload and update the path if a file is uploaded
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('product_images', 'public');
        $product->path=$imagePath;
    }

    
    
    if($product->isDirty('name') || $product->isDirty('price') || $product->isDirty('path') ){
        $product->save();
        return redirect()->route('product.show', $product->id)->with('success', 'Product updated successfully');
    }
    else{
        return redirect()->route('product.show', $product->id)->with('info', 'No changes were made to the product.');
    }
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully');
    }
}
