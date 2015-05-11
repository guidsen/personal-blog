<?php namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\Auth\Guard;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login()
    {
        return view('dashboard.login');
    }

    public function postLogin(LoginRequest $request, Guard $auth)
    {
        if ($auth->attempt($request->only('email', 'password'))) {
            return 'Succesvol';
        }

        return redirect()->back()->withErrors(['message' => 'Credentials does not match.']);
    }

    public function logout(Guard $auth)
    {
        $auth->logout();
        return redirect('dashboard/login');
    }
}