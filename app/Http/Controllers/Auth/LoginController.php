<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     *
     *
     */

     public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }



    public function __construct()
    {
        $this->middleware('guest')->except('logout');

        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication was successful

            // Get the authenticated user
            $user = Auth::user();

            // Check the user's role and redirect accordingly
            if ($user->role === 'penjual') {
                return redirect()->route('dashboard');
            } elseif ($user->role === 'pembeli') {
                return redirect()->route('ecommercePengguna');
            } else {
                // Handle other roles or scenarios
                // For example, redirect to a default dashboard
                return redirect()->route('login');
            }
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
