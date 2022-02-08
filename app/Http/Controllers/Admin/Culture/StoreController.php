<?php

namespace App\Http\Controllers\Admin\Culture_group;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Culture_group\StoreRequest;
use App\Models\Culture_group;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Culture_group::firstOrCreate($data);
        return redirect()->route('admin.culture_group.index');
    }
}
