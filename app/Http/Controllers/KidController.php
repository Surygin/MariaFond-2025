<?php

namespace App\Http\Controllers;

use App\Models\Kid;
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
        return view('admin.list', compact('kids'));
    }

    public function show($id)
    {
        $kid = Kid::findOrFail($id);
        return view('admin.show-kid', compact('kid'));
    }
}
