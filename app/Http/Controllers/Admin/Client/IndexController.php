<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use App\Http\Filters\ClientFilter;
use App\Http\Requests\Admin\Client\FilterRequest;
use App\Models\Client;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
//    public function __invoke()
    {
        $data = $request->validated();
//        dd($data);
        $pole = 'name';
        $sort = 'ASC';
        if ((isset($data['name']) !== false) || (isset($data['delivery_cost']) !== false) || (isset($data['region']) !== false)
            || (isset($data['agreement_date']) !== false)) {

            $filter = app()->make(ClientFilter::class, ['queryParams' => array_filter($data)]);
//            dd($filter);
            $clients = Client::filter($filter)->orderBy('agreement_date', 'DESC')->paginate(5);
            return view('admin.client.index', compact('clients'));
        }

        if (isset($data['sort']) == true) {
            if ($data['sort'] == 'name_up') {
                $pole = 'name';
                $sort = 'ASC';
            }
        }
        if (isset($data['sort']) == true) {
            if ($data['sort'] == 'name_down') {
                $pole = 'name';
                $sort = 'DESC';
            }
        }

        if (isset($data['sort']) == true) {
            if ($data['sort'] == 'delivery_cost_up') {
                $pole = 'delivery_cost';
                $sort = 'ASC';
            }
        }
        if (isset($data['sort']) == true) {
            if ($data['sort'] == 'delivery_cost_down') {
                $pole = 'delivery_cost';
                $sort = 'DESC';
            }
        }
        $clients = Client::orderBy($pole, $sort)->paginate(10);
        return view('admin.client.index', compact('clients'));
    }
}
