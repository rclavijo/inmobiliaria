<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectPath()
    {
        if((auth()->user()->rol) === 'seller_company' || (auth()->user()->rol) === 'seller_person') {
            return $this->redirectTo = route('prop') ;
        }
        elseif((auth()->user()->rol) === 'admin') {
            return $this->redirectTo = route('admini') ;
        }
         elseif((auth()->user()->rol) === 'admin') {
            return $this->redirectTo = route('admini') ;
        }
         elseif((auth()->user()->rol) === 'root') {
            return $this->redirectTo = route('rootini') ;
        }
    }
}
