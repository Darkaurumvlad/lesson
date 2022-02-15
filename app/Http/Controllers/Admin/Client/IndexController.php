<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use App\Http\Filters\ClientFilter;
use App\Http\Requests\Admin\Client\FilterRequest;
use App\Models\Client;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        if ($data !== []) {
            $filter = app()->make(ClientFilter::class, ['queryParams' => array_filter($data)]);
            $clients = Client::filter($filter)->orderBy('agreement_date', 'DESC')->paginate(5);
            return view('admin.client.index', compact('clients'));
        }
       $clients = Client::paginate(10);
        return view('admin.client.index', compact('clients'));
    }
}
