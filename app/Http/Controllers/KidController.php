<?php

namespace App\Http\Controllers;

use App\Http\Requests\Kid\StoreRequest;
use App\Http\Requests\Kid\UpdateRequest;
use App\Mail\Kid\FinishFundraisingMail;
use App\Models\Kid;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class KidController extends Controller
{
    /**
     * @return View
     */
    public function index():View
    {
        $kids = Kid::all()->where('is_active', true);
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
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validationData();

        DB::beginTransaction();

        $kid = Kid::create($data);
        $kid->image()->create([
            'url' => $data['url']
        ]);

        DB::commit();

        return redirect()->route('kids.index');
    }

    /**
     * @param Kid $kid
     * @return View
     */
    public function edit(Kid $kid): View
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
        $data['start_fundraising'] = $kid->start_fundraising + $data['fundraising'];
        $kid->update($data);

        if ($kid->start_fundraising >= $kid->end_fundraising)
        {
//            $user = User::find(1);
            $status['is_active'] = false;
            $kid->update($status);
            Mail::to('anton@premier-partner.ru')->send(new FinishFundraisingMail($kid));
        }
        return redirect()->route('kids.index');
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
