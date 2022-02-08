<?php

namespace App\Http\Controllers\Admin\Culture_group;

use App\Http\Controllers\Controller;
use App\Models\Culture_group;

class IndexController extends Controller
{
    public function __invoke()
    {
        $culture_groups = Culture_group::all();

        return view('admin.culture_group.index', compact('culture_groups'));
    }
}
