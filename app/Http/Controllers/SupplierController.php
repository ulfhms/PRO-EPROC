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
        $profile = DB::table('suppliers')
        // ->select('users.id','bidang_usahas.nama_bingus','banks.nama_bank','users.npwp','users.narahubung','users.name','users.telepon','users.no_rek','users.alamat','users.image','users.email')
        ->join('banks', 'suppliers.bank_id', '=', 'banks.id')
        ->join('bidang_usahas', 'suppliers.bidangusaha_id', '=', 'bidang_usahas.id')
        ->where('suppliers.user_id',auth()->id())->first();
        // dd($profile);
        return view('supplier/profile/index', compact('profile'));
    }

    public function editProfile($id)
    {
        $supplier = Supplier::where('user_id',$id)->first();
        // dd($supplier);
        $profile = DB::table('suppliers')
        ->join('banks', 'suppliers.bank_id', '=', 'banks.id')
        ->join('bidang_usahas', 'suppliers.bidangusaha_id', '=', 'bidang_usahas.id')
        ->join('users', 'suppliers.user_id', '=', 'users.id')
        ->where('suppliers.id',$supplier->id)->first();
        // dd($supplier);
        $bingus = BidangUsaha::get();
        $banks = Bank::get();
        return view('supplier/profile/editProfile', compact('profile', 'bingus', 'banks'));
    }

    public function updateProfile(Request $request, $id){
        $user = User::find($id);
        // dd($profile);
        $supplier = Supplier::where('user_id',$user->id)->first();
        $image = $supplier->image;
        if($request->hasFile('image')){
            Storage::delete($image);
            $image = $request->file('image')->store('images/logo');
        }
        $supplier->update([
            'bidangusaha_id' => $request->bidangusaha,
            'bank_id' => $request->bank,
            'npwp' => $request->npwp,
            'narahubung' => $request->narahubung,
            'nama_supplier' => $request->name,
            'telepon' => $request->telepon,
            'no_rek' => $request->no_rek,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'logo_supplier' => $image
            ]);
            
        return redirect()->route('supplier.profile');

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
