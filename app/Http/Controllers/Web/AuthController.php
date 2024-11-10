<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Auth\LoginRequest;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formLogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $loginRequest)
    {
        $params = $loginRequest->validated();
        
        if (Auth::attempt($params)) {
            return redirect()->route('products.index');
        }

        return redirect()->route('form_login')->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('form_login');
    }
}
