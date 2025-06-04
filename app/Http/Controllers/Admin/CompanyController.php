<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\UpdateRequest;
use App\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CompanyController extends Controller
{
    /**
     * @return View
     */
    public function show(): View
    {
        $about = Company::findOrFail(1);
        return view('admin.about.show', compact('about'));
    }

    /**
     * @param UpdateRequest $request
     * @return RedirectResponse
     */
    public function store(UpdateRequest $request): RedirectResponse
    {
        $data = $request->validationData();
        $about = Company::findOrFail(1);
        $about->update($data);
        $request->session()->flash('status', 'Данные обновлены!');

        return redirect()->route('admin.about');
    }
}
