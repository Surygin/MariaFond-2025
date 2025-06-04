<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contacts\UpdateRequest;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * @return View
     */
    public function show(): View
    {
        $contacts = Contact::findOrFail(1);
        return view('admin.contacts.show', compact('contacts'));
    }

    /**
     * @param UpdateRequest $request
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request): RedirectResponse
    {
        $data = $request->validationData();
        $contacts = Contact::findOrFail(1);
        $contacts->update($data);
        $request->session()->flash('status', 'Данные обновлены!');

        return redirect()->route('admin.contacts.show');
    }
}
