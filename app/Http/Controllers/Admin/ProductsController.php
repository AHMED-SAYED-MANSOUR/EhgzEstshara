<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function show()
    {
        $products = Product::all();
        return view('admin.product.show', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ProductName' => 'required',
            'Quantity' => 'required|integer|min:0',
            'Price' => 'required|numeric|min:0',
            'Category' => 'required',
            'Description' => 'nullable',
            'img' => 'nullable|image',
            'offer' => 'nullable|numeric|min:0|max:100',
            'Brand' => 'nullable',
            'Material' => 'nullable',
            'Color' => 'nullable',
        ]);

        // Handle file upload
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('products_images');
        } else {
            $imagePath = null;
        }

        Product::create([
            'ProductName' => $request->ProductName,
            'Quantity' => $request->Quantity,
            'Price' => $request->Price,
            'Category' => $request->Category,
            'Description' => $request->Description,
            'img' => $imagePath,
            'offer' => $request->offer,
            'Brand' => $request->Brand,
            'Material' => $request->Material,
            'Color' => $request->Color,
        ]);

        return redirect()->route('admin.products.show')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $request->validate([
            'ProductName' => 'required',
            'Quantity' => 'required|integer|min:0',
            'Price' => 'required|numeric|min:0',
            'Category' => 'required',
            'Description' => 'nullable',
            'img' => 'image',
            'offer' => 'nullable|numeric|min:0|max:100',
            'Brand' => 'nullable',
            'Material' => 'nullable',
            'Color' => 'nullable',
        ]);

        // Handle file upload
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store();
            // Delete old image if it exists
            if ($product->img !== null) {
                Storage::delete($product->img);
                Storage::put("product_images/$imagePath", '');
            }
            $product->img = $imagePath;
        }

        $product->update([

            'ProductName' => $request->ProductName,
            'Quantity' => $request->Quantity,
            'Price' => $request->Price,
            'Category' => $request->Category,
            'Description' => $request->Description,
            'offer' => $request->offer,
            'Brand' => $request->Brand,
            'Material' => $request->Material,
            'Color' => $request->Color,
        ]);

        return redirect()->route('admin.products.show')->with('success', 'Product updated successfully.');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('admin.products.show')->with('success', 'Product deleted successfully.');
    }
}
