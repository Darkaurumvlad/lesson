<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\FilterRequest;
use App\Models\Culture;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
//        $date = $request->validated();
//        dd($date);
        $products = Product::paginate(10);

        return view('admin.product.index', compact('products'));
    }
}
