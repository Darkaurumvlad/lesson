<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Culture;

class CreateController extends Controller
{
    public function __invoke()
    {
        $cultures = Culture::all();
        //dd($cultures);
        return view('admin.product.create', compact('cultures'));
    }
}
