<?php

namespace App\Http\Controllers\Admin\Culture_group;

use App\Http\Controllers\Controller;
use App\Models\Culture_group;

class EditController extends Controller
{
    public function __invoke(Culture_group $culture_group)
    {
        return view('admin.culture_group.edit', compact('culture_group'));
    }
}
