<?php

namespace App\Http\Controllers;

use App\Models\PengadaanBarang;
use App\Models\PengadaanSupplier;
use Illuminate\Http\Request;

class SupplierPengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengadaans = PengadaanSupplier::get();
        return view('supplier/pengadaanBarang/index', compact('pengadaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengadaans = PengadaanBarang::where('status_pengadaan',1)->get();
        return view('supplier/pengadaanBarang/create', compact('pengadaans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if($request->file('proposal')){
            $proposal=$request->file('proposal')->store('pengadaanBarang/proposal');
        }else{
            $proposal=null;
        }
        $data = [
            'pengadaan_id' => $request->pengadaan_id,
            'supplier_id' => auth()->id(),
            'status_supplier' => 'submitted',
            'proposal' => $proposal,
            'harga_penawaran' => $request->harga_penawaran,
        ];

        PengadaanSupplier::create($data);

        return redirect()->route('supplier.pengadaanBarang.index');
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
        return view('supplier/pengadaanBarang/detail');
        
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
