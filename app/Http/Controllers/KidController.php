<?php

namespace App\Http\Controllers;

use App\Http\Requests\Kid\StoreRequest;
use App\Http\Requests\Kid\UpdateRequest;
use App\Models\Kid;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KidController extends Controller
{
    /**
     * @return View
     */
    public function index():View
    {
        $kids = Kid::all();
        return view('admin.kids.list', compact('kids'));
    }

    /**
     * @param $id
     * @return View
     */
    public function show($id):View
    {
        $kid = Kid::findOrFail($id);
        return view('admin.kids.show-kid', compact('kid'));
    }

    /**
     * @return View
     */
    public function create():View
    {
        return view('admin.kids.create');
    }


    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validationData();
        Kid::create($data);
        return redirect()->route('kids');
    }

    public function edit(Kid $kid)
    {
        return view('admin.kids.edit', compact('kid'));
    }

    /**
     * @param UpdateRequest $request
     * @param Kid $kid
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, Kid $kid): RedirectResponse
    {
        $data = $request->validationData();
        $kid->update($data);
        return redirect()->route('kids');
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $data = Kid::findOrFail($id);
        $data->delete();
        return redirect()->route('kids');
    }
}
