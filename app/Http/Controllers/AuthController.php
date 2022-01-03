<?php

namespace App\Http\Controllers;

use App\Models\BidangUsaha;
use App\Models\User;
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
                return redirect()->route('dpal.pengadaanBarang.index');
            }elseif($user->level == 'rektor'){
                return redirect()->route('dpal.pengadaanBarang.index');
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
                return redirect()->route('dpal.pengadaanBarang.index');
            }elseif($user->level == 'rektor'){
                return redirect()->route('dpal.pengadaanBarang.index');
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
        $bingus = BidangUsaha::get();
        // \View::share([
        //     'bingus' => BidangUsaha::get(),
        //     'banks' => Bank::get(),
        // ]);
        // dd($bingus);
        return view('auth/register', compact('bingus'));
    }
    
    public function prosesRegistrasi(Request $request){
        $data = $request->all();

        if($request->file('image')){
            $image=$request->file('image')->store('images/logo');
        }else{
            $image=null;
        }
        $data['bidangusaha_id'] = request('bidangUsaha');
        $data['password'] = request(bcrypt('password'));
        $data['image']= $image;

        User::create($data);

        return redirect()->route('supplier.profile');

    }

    public function forget(){
        return view('auth/forgetpw');
    }
}
