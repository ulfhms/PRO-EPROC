<?php

namespace App\Http\Controllers;

use App\Models\Budjet;
use Illuminate\Http\Request;

class EbudjetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budjets = Budjet::get();
        return view('dpal/ebudjeting/index',compact('budjets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $budjet = new Budjet();
        return view('dpal/ebudjeting/create', compact('budjet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'status' => 'required',
            'unit_kerja_pengusul' => 'required',
            'anggaran' => 'required',
            'rencana_belanja' => 'required',
            'sisa_anggaran' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'uraian' => 'required',
        ],[
            'nama_kegiatan.required' => 'Nama kegiatan wajib diisi',
            'status.required' => 'Status wajib diisi',
            'unit_kerja_pengusul.required' => 'Unit kerja pengusul wajib diisi',
            'anggaran.required' => 'Anggaran wajib diisi',
            'rencana_belanja.required' => 'Rencana belanja wajib diisi',
            'sisa_anggaran.required' => 'Sisa anggaran wajib diisi',
            'waktu_mulai.required' => 'Waktu mulai wajib diisi',
            'waktu_selesai.required' => 'Waktu selesai wajib diisi',
            'uraian.required' => 'Uraian wajib diisi',
        ]);

        $data = $request->all();
        Budjet::create($data);

        return redirect('dpal.ebudjeting.index');
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
