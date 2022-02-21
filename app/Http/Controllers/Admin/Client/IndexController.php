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
        $pole = 'name';
        $sort = 'ASC';
        if ($data !== []) {
            $filter = app()->make(ClientFilter::class, ['queryParams' => array_filter($data)]);
            $clients = Client::filter($filter)->orderBy('agreement_date', 'DESC')->paginate(5);
            return view('admin.client.index', compact('clients'));
        }

        if ($request->sort == 'name_up') {
            $pole = 'name';
            $sort = 'ASC';
        }
        if ($request->sort == 'name_down') {
            $pole = 'name';
            $sort = 'DESC';
        }
        if ($request->sort == 'delivery_cost_up') {
            $pole = 'delivery_cost';
            $sort = 'ASC';
        }
        if ($request->sort == 'delivery_cost_down') {
            $pole = 'delivery_cost';
            $sort = 'DESC';
        }
       $clients = Client::orderBy($pole, $sort)->paginate(10);
        return view('admin.client.index', compact('clients'));
    }
}
