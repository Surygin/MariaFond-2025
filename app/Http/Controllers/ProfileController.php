<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * @return View
     */
    public function show():View
    {
        $user = Auth::user();
        return view('admin.profile.show', compact('user'));
    }

    /**
     * @return View
     */
    public function editPassword(): View
    {
        return view('admin.profile.edit-password');
    }

    public function updatePassword(Request $request)
    {

    }
}
