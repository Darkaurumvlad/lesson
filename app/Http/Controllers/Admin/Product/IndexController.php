<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Filters\ProductFilter;
use App\Http\Requests\Admin\Product\FilterRequest;
use App\Models\Product;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        //dd($data);

        if ($data !== []) {
            //dd($data);
            $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);
            $products = Product::filter($filter)->orderBy('updated_at', 'DESC')->paginate(5);
            return view('admin.product.index', compact('products'));
        }


        $products = Product::paginate(7);
        return view('admin.product.index', compact('products'));
    }
}
