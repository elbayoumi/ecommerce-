<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo =  RouteServiceProvider::HOME;
    // protected $redirectTo = auth()->guard('admin')->check()? 'dashboard':RouteServiceProvider::HOME;

    public function login(Request $request)
    {
        // dd(Hash::make('mohamedashrafelbayoumi@gmail.com'));
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        // dd(Hash::make('admin@gmail.com'));
        // dd(Auth::guard('web')->attempt($credentials));
        if (Auth::guard('web')->attempt($credentials)) {

            return redirect()->intended('/');

        }

        if (Auth::guard('admin')->attempt($credentials)) {

            return redirect()->intended('/admin/dashboard');
        }
        dd('Invalid credentials');

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
