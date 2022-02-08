<?php

namespace App\Http\Controllers\Admin\Culture;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Culture\UpdateRequest;
use App\Models\Culture;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Culture $culture)
    {
        $data = $request->validated();
        $culture_prov = Culture::where('name', $data['name'])->get();
        //dd($category);
        foreach ($culture_prov as $cult)
            if ($cult->name == true) {
                return redirect()->back()->with('success', 'Такая категория уже существует');
            }
        $culture>update($data);
        return view('admin.culture.show', compact('culture'));
    }
}

