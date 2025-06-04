<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\UpdateRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyController extends Controller
{
    public function show(): View
    {
        $about = Company::findOrFail(1);
        return view('admin.about.show', compact('about'));
    }

    public function store(UpdateRequest $request)
    {
        $data = $request->validationData();
        $about = Company::findOrFail(1);
        $about->update($data);

        return redirect()->route('admin.about');
    }
}
