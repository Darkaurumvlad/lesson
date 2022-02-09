<?php

namespace App\Http\Controllers\Admin\Basket;

use App\Http\Controllers\Controller;
use App\Models\Culture;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $products = Product::withTrashed();
        dd($products);

        return view('admin.product.index', compact('products'));
    }
}
