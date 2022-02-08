<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Culture;
use App\Models\Product;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        $cultures = Culture::all();
        //dd($cultures);
        return view('admin.product.edit', compact('product', 'cultures'));
    }
}
