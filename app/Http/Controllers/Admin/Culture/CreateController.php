<?php

namespace App\Http\Controllers\Admin\Culture_group;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.culture_group.create');
    }
}
