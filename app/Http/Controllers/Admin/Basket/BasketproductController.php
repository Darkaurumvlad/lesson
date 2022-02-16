<?php

namespace App\Http\Controllers\Admin\Basket;

use App\Http\Controllers\Controller;
use App\Models\Product;

class BasketproductController extends Controller
{
    public function index()
    {
        $products = Product::onlyTrashed()->get();
        return view('admin.basket_product.index', compact('products'));
    }

    public function restore($id)
    {
        $product = Product::onlyTrashed()->findOrFail($id);
        $product->restore();
        return redirect()->route('admin.product.index');
    }
}
