<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function signin(LoginRequest $request): RedirectResponse
    {
        $admin = User::where(['email' => $request->email, 'is_admin' => true])->first();
        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::login($admin);
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login')->with('loginFail', 'Email or password is wrong!');
    }

    /**
     * @return Application|Factory|View
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
