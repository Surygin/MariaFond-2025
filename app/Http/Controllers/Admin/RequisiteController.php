<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requisites\UpdateRequest;
use App\Models\Requisite;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RequisiteController extends Controller
{
    /**
     * @return View
     */
    public function show(): View
    {
        $requisites = Requisite::findOrFail(1);
        return view('admin.requisites.show', compact('requisites'));
    }

    /**
     * @param UpdateRequest $request
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request): RedirectResponse
    {
        $data = $request->validationData();
        $requisites = Requisite::findOrFail(1);
        $requisites->update($data);
        $request->session()->flash('status', 'Данные обновлены!');

        return redirect()->route('admin.requisites.show');
    }
}
