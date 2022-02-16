<?php

namespace App\Http\Controllers\Admin\Archive;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Culture;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function index()
    {
        $products = Product::onlyTrashed()->paginate(3);
        $clients = Client::onlyTrashed()->paginate(3);
        $cultures = Culture::onlyTrashed()->paginate(3);
        $users = User::onlyTrashed()->paginate(3);
        //dd($products);
        return view('admin.archive.index',
            compact('products', 'clients',
                'cultures', 'users'));
    }

    public function product($id)
    {
        $product = Product::onlyTrashed()
            ->where('id', '=', $id)->first();
        //dd($product);
        return view('admin.archive.product', compact('product'));
    }

    public function client($id)
    {
        $client = Client::onlyTrashed()
            ->where('id', '=', $id)->first();
        //dd($client);
        return view('admin.archive.client', compact('client'));
    }

    public function culture($id)
    {
        $culture = Culture::onlyTrashed()
            ->where('id', '=', $id)->first();
        return view('admin.archive.culture', compact('culture'));
    }

    public function user($id)
    {
        $user = User::onlyTrashed()
            ->where('id', '=', $id)->first();
        return view('admin.archive.user', compact('user'));
    }
}
