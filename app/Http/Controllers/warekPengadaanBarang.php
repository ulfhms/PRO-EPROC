<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class warekPengadaanBarang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('warek/pengadaanBarang/index');
    }

    public function create()
    {
        return view('warek/pengadaanBarang/pengadaanBarang/create');
        
    }
    
    public function editTahap()
    {
        return view('warek/pengadaanBarang/tahap/editTahap');
    }

    public function detailTahap()
    {
        return view('warek/pengadaanBarang/tahap/detailTahap');
    }

    public function pengumumanPengadaan(){
        return view('warek/pengadaanBarang/pengumumanPengadaan');

    }

    public function pesertaPengadaan(){
        return view('warek/pengadaanBarang/pesertaPengadaan/pesertaPengadaan');

    }

    public function pesertaEvaluasi(){
        return view('warek/pengadaanBarang/pesertaPengadaan/pesertaEvaluasi');

    }

    public function detailPesertaPengadaan(){
        return view('warek/pengadaanBarang/pesertaPengadaan/detailPesertaPengadaan');

    }
    
    public function detailProdukPesertaPengadaan(){
        return view('warek/pengadaanBarang/pesertaPengadaan/detailProdukPesertaPengadaan');

    }

    public function hasilEvaluasi(){
        return view('warek/pengadaanBarang/evaluasi/hasilEvaluasi');

    }

    public function editHasilEvaluasi(){
        return view('warek/pengadaanBarang/evaluasi/editHasilEvaluasi');

    }

    public function pemenang(){
        return view('warek/pengadaanBarang/pemenang/pemenang');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
