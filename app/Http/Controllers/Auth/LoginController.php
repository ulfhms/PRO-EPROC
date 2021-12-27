<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user){
        if ($user->hasRole('supplier')){
            return redirect()->route('supplier.profile');
        }elseif($user->hasRole('dpal')){
            return redirect()->route('dpal.pengadaanBarang.index');
        }elseif($user->hasRole('warek')){
            return redirect()->route('dpal.pengadaanBarang.index');
        }elseif($user->hasRole('rektor')){
            return redirect()->route('dpal.pengadaanBarang.index');
        }else{
            return redirect('home');
        }
    }
}
