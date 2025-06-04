<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Contact;
use App\Models\Requisite;
use Illuminate\Http\Request;

class TestoController extends Controller
{
    public function testo()
    {
        $about = Company::findOrFail(1);
        return view('admin.about.show', compact('about'));
    }

    public function testoRequ(Request $request)
    {
        $requisites = Requisite::findOrFail(1);
        return view('admin.requisites.show', compact('requisites'));
    }

    public function testoContacts(Request $request)
    {
        $contacts = Contact::findOrFail(1);
        return view('admin.contacts.show', compact('contacts'));
    }
}
