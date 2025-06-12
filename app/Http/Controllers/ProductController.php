<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function dailyCatering()
    {
        $products = Product::where('category_id', 2)->get() ?? collect([]);
        return view('pages.daily-home-catering', compact('products'));
    }

    public function mealBox()
    {
        $products = Product::where('category_id', 4)->get() ?? collect([]);
        return view('pages.meal-box', compact('products'));
    }

    public function tumpengNasiLiwet()
    {
        try {
            $products = Product::with('category')
                ->where('category_id', 1)
                ->get();

            Log::info('Tumpeng Products Query:', [
                'sql' => Product::where('category_id', 1)->toSql(),
                'bindings' => Product::where('category_id', 1)->getBindings(),
                'count' => $products->count(),
                'products' => $products->toArray()
            ]);

            return view('pages.tumpeng-nasi-liwet', compact('products'));
        } catch (\Exception $e) {
            Log::error('Error in tumpengNasiLiwet: ' . $e->getMessage());
            return view('pages.tumpeng-nasi-liwet', ['products' => collect([])]);
        }
    }

    public function show($id)
    {
        try {
            $product = Product::with('category')->findOrFail($id);
            $relatedProducts = Product::where('category_id', $product->category_id)
                ->where('id', '!=', $id)
                ->take(4)
                ->get();

            return view('pages.product-detail', compact('product', 'relatedProducts'));
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Produk tidak ditemukan');
        }
    }
}
