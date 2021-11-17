<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        if($user = Auth::user()){
            if($user->level == 'supplier'){
                return redirect()->route('supplier.profile');
            }elseif ($user->level == 'dpal'){
                return redirect()->route('dpal.pengadaanBarang.index');
            }elseif($user->level == 'warek'){
                return redirect()->route('warek.pengadaanBarang.index');
            }elseif($user->level == 'rektor'){
                return redirect()->route('warek.pengadaanBarang.index');
            }
        }
        return view('auth/masuk');
    }
    
    public function proses_login(Request $request){
        request()->validate([
            'username' => 'required',
            'password' => 'required',
            ]);
            
            $kredensil = $request->only('username','password');

        if (Auth::attempt($kredensil)){
            $user = Auth::user();
            if($user->level == 'supplier'){
                return redirect()->route('supplier.profile');
            }elseif ($user->level == 'dpal'){
                return redirect()->route('dpal.pengadaanBarang.index');
            }elseif($user->level == 'warek'){
                return redirect()->route('warek.pengadaanBarang.index');
            }elseif($user->level == 'rektor'){
                return redirect()->route('warek.pengadaanBarang.index');
            }
            return redirect()->intended('/');
        }
        return redirect()->route('login')->withInput()
        ->withErrors(['login_gagal' => 'These credentials do not match our records.']);;

    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }

    public function registrasi(){
        return view('auth/register');
    }

    public function forget(){
        return view('auth/forgetpw');
    }
}
