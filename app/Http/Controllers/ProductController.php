<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Показывает форму создания продукта
    public function create()
    {
        return view('products.create');
    }

    // Сохраняет новый продукт
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        
        Product::create($request->all());
        
        // Временно возвращаем на форму с сообщением об успехе
        return redirect()->route('products.create')
            ->with('success','Product created successfully.');
    }

    public function index()
    {
        $products = \App\Models\Product::all();
        return view('products.index', compact('products'));
    }

    public function edit(\App\Models\Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, \App\Models\Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    
}
