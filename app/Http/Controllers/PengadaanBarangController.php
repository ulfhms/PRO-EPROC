<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengadaanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dpal/pengadaanBarang/index');
    }

    public function create()
    {
        return view('dpal/pengadaanBarang/pengadaanBarang/create');
        
    }

    public function detail()
    {
        return view('dpal/pengadaanBarang/pengadaanBarang/detail');
        
    }
    
    public function editTahap()
    {
        return view('dpal/pengadaanBarang/tahap/editTahap');
    }

    public function detailTahap()
    {
        return view('dpal/pengadaanBarang/tahap/detailTahap');
    }

    public function pengumumanPengadaan(){
        return view('dpal/pengadaanBarang/pengumumanPengadaan');

    }

    public function pesertaPengadaan(){
        return view('dpal/pengadaanBarang/pesertaPengadaan/pesertaPengadaan');

    }

    public function pesertaEvaluasi(){
        return view('dpal/pengadaanBarang/pesertaPengadaan/pesertaEvaluasi');

    }

    public function detailPesertaPengadaan(){
        return view('dpal/pengadaanBarang/pesertaPengadaan/detailPesertaPengadaan');

    }
    
    public function detailProdukPesertaPengadaan(){
        return view('dpal/pengadaanBarang/pesertaPengadaan/detailProdukPesertaPengadaan');

    }

    public function hasilEvaluasi(){
        return view('dpal/pengadaanBarang/evaluasi/hasilEvaluasi');

    }

    public function editHasilEvaluasi(){
        return view('dpal/pengadaanBarang/evaluasi/editHasilEvaluasi');

    }

    public function pemenang(){
        return view('dpal/pengadaanBarang/pemenang/pemenang');

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
