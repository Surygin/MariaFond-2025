<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\ChangePasswordRequest;
use App\Models\Kid;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class ProfileController extends Controller
{

    /**
     * @return View
     */
    public function show():View
    {
        $user = Auth::user();
        $recipients = Kid::count();
        $recipientsActive = Kid::all()->where('is_active', true)->count();
        $recipientsDone = Kid::all()->where('is_active', false)->count();
        return view('admin.profile.show', compact('user', 'recipients', 'recipientsActive', 'recipientsDone'));
    }

    /**
     * @return View
     */
    public function editPassword(): View
    {
        return view('admin.profile.edit-password');
    }

    /**
     * @param ChangePasswordRequest $request
     * @return RedirectResponse
     */
    public function updatePassword(ChangePasswordRequest $request): RedirectResponse
    {
        $data = $request->validationData();
        $user = Auth::user();

        if (Hash::check($data['old_password'], $user->password)){
            $user->update(['password' => Hash::make($data['password'])]);
            return redirect()
                ->route('profile.edit.password')
                ->withErrors(['new_password' => 'Пароль обновлен!']);

        }

        return redirect()
            ->route('profile.edit.password')
            ->withErrors(['old_password' => 'Не правильный пароль!!!']);
    }
}
