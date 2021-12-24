<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\BidangUsaha;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Supplier::where('user_id',auth()->id())->first();
        return view('supplier/profile/index', compact('profile'));
    }

    public function editProfile($id)
    {
        $profile = Supplier::where('user_id',$id)->first();
        $bingus = BidangUsaha::get();
        $banks = Bank::get();
        return view('supplier/profile/editProfile', compact('profile', 'bingus', 'banks'));
    }

    public function updateProfile(Request $request, $id){
        $user = User::find($id);
        // dd($profile);
        $supplier = Supplier::where('user_id',$user->id)->first();

        $request->validate([
            'nama_supplier' => 'required',
            'npwp' => 'required',
            'narahubung' => 'required',
            'telepon' => 'required',
            'no_rek' => 'required',
            'alamat' => 'required',
            'logo_supplier' => 'mimes:jpg,png',
        ],[
            'nama_supplier.required' => 'Nama supplier wajib diisi',
            'npwp.required' => 'NPWP wajib diisi',
            'narahubung.required' => 'Narahubung wajib diisi',
            'telepon.required' => 'Telepon wajib diisi',
            'no_rek.required' => 'Nomor rekening wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'logo_supplier.mimes' => 'Format logo harus berformat jpg.png',
        ]);

        $image = $supplier->logo_supplier;
        if($request->hasFile('logo_supplier')){
            Storage::delete($image);
            $image = $request->file('logo_supplier')->store('images/logo_supplier');
        }

        $supplier->update([
            'bidangusaha_id' => $request->bidangusaha,
            'bank_id' => $request->bank,
            'npwp' => $request->npwp,
            'narahubung' => $request->narahubung,
            'nama_supplier' => $request->nama_supplier,
            'telepon' => $request->telepon,
            'no_rek' => $request->no_rek,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'logo_supplier' => $image
            ]);
            
        return redirect()->route('supplier.profile')->with(['success' => 'Data supplier berhasil di ubah']);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
