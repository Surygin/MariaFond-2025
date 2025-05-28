<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * @return View
     */
    public function login(): View
    {
        return view('admin.login');
    }

    /**
     * @param AuthRequest $request
     * @return RedirectResponse
     */
    public function auth(AuthRequest $request): RedirectResponse
    {
        $data = $request->validationData();
        unset($data['_token']);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()->route('kids.index');
        }

        return back()->withErrors([
            'password' => 'Предоставленные учетные данные не соответствуют нашим записям.',
        ])->onlyInput('email');
    }

    /**
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
