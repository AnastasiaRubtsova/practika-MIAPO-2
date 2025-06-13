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
}
