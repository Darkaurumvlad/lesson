<?php

namespace App\Http\Controllers\Admin\Basket;

use App\Http\Controllers\Controller;
use App\Models\Client;

class BasketclientController extends Controller
{
    public function index()
    {
        $clients = Client::onlyTrashed()->get();
        return view('admin.basket_client.index', compact('clients'));
    }

    public function restore($id)
    {
        $client = Client::onlyTrashed()->findOrFail($id);
        $client->restore();
        return redirect()->route('admin.client.index');
    }
}
