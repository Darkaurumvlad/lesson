<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Filters\ProductFilter;
use App\Http\Requests\Admin\Product\FilterRequest;
use App\Models\Culture;
use App\Models\Product;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $pole = 'name';
        $sort = 'ASC';

        if ($data !== []) {
            $cultures = Culture::all();
            $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);
//            $products = Product::filter($filter)->orderBy('updated_at', 'DESC')->paginate(5);
            $products = Product::filter($filter)->orderBy('updated_at', 'DESC')->paginate(5);
            return view('admin.product.index', compact('products', 'cultures'));
        }

        $cultures = Culture::all();
        if ($request->sort == 'name_up') {
            $pole = 'name';
            $sort = 'ASC';
        }
        if ($request->sort == 'name_down') {
            $pole = 'name';
            $sort = 'DESC';
        }
        if ($request->sort == 'price_up') {
            $pole = 'price';
            $sort = 'ASC';
        }
        if ($request->sort == 'price_down') {
            $pole = 'price';
            $sort = 'DESC';
        }

        $products = Product::orderBy($pole, $sort)->paginate(7);
        return view('admin.product.index', compact('products', 'cultures'));
    }
}

