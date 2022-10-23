<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\BidangUsaha;
use App\Models\PengadaanBarang;
use App\Models\PengadaanSupplier;
use App\Models\User;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        if($user = Auth::user()){
            if ($user->level == 'rektor') {
                return redirect()->intended('rektor');
            } else if ($user->level == 'warek') {
                return redirect()->route('dpal.pengadaanBarang.index');

                // return redirect()->intended('warek');
            }else if ($user->level === 'dpal') {
                // $pengadaans = PengadaanBarang::paginate(20);
                // $pengsups = PengadaanSupplier::get();
                // return view('dpal/pengadaanBarang/index', compact('pengadaans','pengsups'));
                return redirect()->route('dpal.pengadaanBarang.index');

            }else if ($user->level == 'supplier') {
                return view('supplier/profile');

            }
        }
        return view('auth/login');
    }
    
    public function proses_login(Request $request){
        // dd($request);
        // request()->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email supplier wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);
            
            $kredensil = $request->only('email','password');

        if (Auth::attempt($kredensil)){
            $user = Auth::user();
            if ($user->level == 'rektor') {
                return redirect()->intended('rektor');
            } else if ($user->level == 'warek') {
                return redirect()->route('dpal.pengadaanBarang.index');

            }else if ($user->level == 'dpal') {
                // $pengadaans = PengadaanBarang::paginate(20);
                // $pengsups = PengadaanSupplier::get();
                // return view('dpal/pengadaanBarang/index', compact('pengadaans','pengsups'));

                return redirect()->route('dpal.pengadaanBarang.index');
            }else if ($user->level == 'supplier') {
                return redirect()->route('supplier.profile');
            }
            // return redirect()->route('home.index');
        }
        return redirect()->route('login');

    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }

    public function registrasi(){
        $bingus = BidangUsaha::get();
        $banks = Bank::get();

        return view('auth/register', compact('bingus','banks'));
    }
    
    public function prosesRegistrasi(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8|confirmed',
            'bidangUsaha' => 'required',
            'bank' => 'required',
            'npwp' => 'required|unique:suppliers',
            'narahubung' => 'required',
            'telepon' => 'required',
            'no_rek' => 'required',
            'alamat' => 'required',
            'logo_supplier' => 'required|mimes:jpg,jpeg,png',
        ],[
            'name.required' => 'Nama wajib diisi',
            'username.required' => 'Username wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Masukkan email dengan benar',
            'email.unique' => 'Email telah dipakai',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Password tidak sama',
            'bidangUsaha.required' => 'Pilih salah satu',
            'bank.required' => 'Pilih salah satu',
            'npwp.required' => 'NPWP wajib diisi',
            'npwp.unique' => 'NPWP sudah terdaftar',
            'narahubung.required' => 'Narahubung wajib diisi',
            'telepon.required' => 'Telepon wajib diisi',
            'no_rek.required' => 'Nomor rekening wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'logo_supplier.required' => 'Logo wajib diisi',
            'logo_supplier.mimes' => 'Logo wajib berformat jpg, jpeg atau png',

        ]);
        
        if($request->file('logo_supplier')){
            $image=$request->file('logo_supplier')->store('images/logo');
        }else{
            $image=null;
        }

        $userRequest = [
            'name' => request()->name,
            'username' => request()->username,
            'email' => request()->email,
            'password' => bcrypt(request()->password),
            'level' => 'supplier'
        ];
        // dd($user);
        $user = User::create($userRequest);
        $akun = User::where('id',$user->id)->first();
        $supplierRequest = [
            'bidangusaha_id' => request()->bidangUsaha,
            'bank_id' => request()->bank,
            'user_id' => $akun->id,
            'npwp' => request()->npwp,
            'narahubung' => request()->narahubung,
            'nama_supplier' => $akun->name,
            'telepon' => request()->telepon,
            'no_rek' => request()->no_rek,
            'alamat' => request()->alamat,
            'logo_supplier' => $image,
        ];
        // dd($supplierRequest);
        Supplier::create($supplierRequest);
        // $profile = Supplier::where('user_id',auth()->id())->first();

        return redirect()->route('supplier.profile');
        // return view('supplier/profile/index', compact('profile'));


    }

    public function forget(){
        return view('auth/forgetpw');
    }
}
