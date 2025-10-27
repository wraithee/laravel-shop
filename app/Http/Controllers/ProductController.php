<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2',
            'price' => 'required|numeric|min:0',
            'category_id' => 'nullable|exists:categories,id',
            'description' => 'nullable|string',
        ]);

        Product::create($validated);

        return redirect(route('products.index'));
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('products.edit', compact('categories', 'product'));
    }


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:2',
            'price' => 'required|numeric|min:0',
            'category_id' => 'nullable|exists:categories,id',
            'description' => 'nullable|string',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validated);

        return redirect(route('products.index'));
    }


    public function destroy(string $id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();

            return redirect(route('products.index'));
        }
        else {
            return redirect(route('products.index'));
        }
    }
}
