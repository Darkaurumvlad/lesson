<?php

namespace App\Http\Controllers\Admin\Culture_group;

use App\Http\Controllers\Controller;
use App\Models\Culture_group;

class DeleteController extends Controller
{
    public function __invoke(Culture_group $culture_group)
    {
        $culture_group->delete();
        return redirect()->route('admin.culture_group.index');
    }
}
