<?php

namespace App\Http\Controllers\Admin\Culture_group;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Culture_group\UpdateRequest;
use App\Models\Culture_group;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Culture_group $culture_group)
    {
        $data = $request->validated();
        $culture_group_prov = Culture_group::where('name', $data['name'])->get();
        //dd($category);
        foreach ($culture_group_prov as $cult)
            if ($cult->name == true) {
                return redirect()->back()->with('success', 'Такая категория уже существует');
            }
        $culture_group->update($data);
        return view('admin.culture_group.show', compact('culture_group'));
    }
}

