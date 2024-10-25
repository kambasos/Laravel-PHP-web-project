<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
{
    // Валідація форми
    $request->validate([
        'ProductName' => 'required|string|max:255',
        'Price' => 'required|integer',
        'ProductDescription' => 'nullable|string',
        'ImageURL' => 'nullable|string|max:255',
    ]);

    // Створення нового продукту
    Product::create([
        'ProductName' => $request->ProductName,
        'Price' => $request->Price,
        'ProductDescription' => $request->ProductDescription,
        'ImageURL' => $request->ImageURL,
    ]);

    // Повернення на сторінку продуктів з повідомленням про успіх
    return redirect()->route('products.index')->with('success', 'Продукт додано успішно');
}


public function edit(Product $product)
{
    return view('products.edit', compact('product'));
}

public function update(Request $request, Product $product)
{
    // Валідація форми
    $request->validate([
        'ProductName' => 'required|string|max:255',
        'Price' => 'required|integer',
        'ProductDescription' => 'nullable|string',
        'ImageURL' => 'nullable|string|max:255',
    ]);

    // Оновлення продукту
    $product->update([
        'ProductName' => $request->ProductName,
        'Price' => $request->Price,
        'ProductDescription' => $request->ProductDescription,
        'ImageURL' => $request->ImageURL,
    ]);

    // Повернення на сторінку продуктів з повідомленням про успіх
    return redirect()->route('products.index')->with('success', 'Продукт оновлено успішно');
}


 


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
