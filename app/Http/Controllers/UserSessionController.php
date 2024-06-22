<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserSessionController extends Controller
{
    protected $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function viewLogin()
    {
        try {
            return view('login', ['title' => 'Login - Pantai Goa Petapa']);
        } catch (\Exception $e) {
            abort(500);
        }
    }

    public function viewRegister()
    {
        try {
            return view('register', ['title' => 'Register - Pantai Goa Petapa']);
        } catch (\Exception $e) {
            abort(500);
        }
    }

    public function profil($id)
    {
        try {
            return view('user/profil', [
                'user' => $this->userService->getUserByUuid($id),
                'title' => 'Profil - Pantai Goa Petapa'
            ]);
        } catch (\Exception $e) {
            abort(500);
        }
    }

    public function login(LoginRequest $request)
    {
        try {
            $credentials = $request->only('email', 'password');

            if (auth()->attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('/');
            }

            return redirect()->route('login')->with('error', 'Email atau password salah!')->with($request->only('email'));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage())->with($request->only('email'));
        }
    }

    public function logout(Request $request)
    {
        try {
            auth()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
