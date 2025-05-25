<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestoController extends Controller
{
    public function testo() :string
    {
        return 'This is Testo page!';
    }
}
