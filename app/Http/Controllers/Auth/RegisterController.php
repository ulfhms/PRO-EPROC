<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\BidangUsaha;
use App\Models\Supplier;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'alamat' => ['required', 'string'],
            'bidangUsaha' => ['required'],
            'telepon' => ['required'],
            'npwp' => ['required', 'unique:suppliers'],
            'narahubung' => ['required'],
            'no_rek' => ['required'],

        ],[
            'name.required' => 'Nama wajib diisi',
            'name.max' => 'Nama supplier maksimal 255 karakter',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Masukkan email dengan benar',
            'email.max' => 'Email supplier maksimal 255 karakter',
            'email.unique' => 'Email telah dipakai',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Password tidak sama',
            'alamat.required' => 'Alamat wajib diisi',
            'bidangUsaha.required' => 'Pilih salah satu',
            'telepon.required' => 'Telepon wajib diisi',
            'npwp.required' => 'NPWP wajib diisi',
            'npwp.unique' => 'NPWP sudah terdaftar',
            'narahubung.required' => 'Narahubung wajib diisi',
            'no_rek.required' => 'Nomor rekening wajib diisi',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create( array $data)
    {
        // dd($data);
        // $image = $supplier->logo_supplier;
        // if($request->hasFile('logo_supplier')){
        //     Storage::delete($image);
        //     $image = $request->file('logo_supplier')->store('images/logo_supplier');
        // }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            ]);
            // dd($user);
        $user->assignRole('supplier');
        Supplier::create([
            'bidangusaha_id' => $data['bidangUsaha'],
            'bank_id' => $data['bank'],
            'user_id' => $user->id,
            'npwp' => $data['npwp'],
            'narahubung' => $data['narahubung'],
            'nama_supplier' =>$data['name'],
            'telepon' => $data['telepon'],
            'no_rek' => $data['no_rek'],
            'alamat' => $data['alamat'],
            // 'logo_supplier' => $image,
        ]);
        return $user;
    }
}
