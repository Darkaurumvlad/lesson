<?php

namespace App\Http\Controllers\Admin\Culture_group;

use App\Http\Controllers\Controller;
use App\Models\Culture_group;

class ShowController extends Controller
{
    public function __invoke(Culture_group $culture_group)
    {
        return view('admin.culture_group.show', compact('culture_group'));
    }
}
