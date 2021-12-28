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
            'proposal_pengadaan' => 'required|mimetypes:application/pdf',
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
            'proposal_pengadaan.required' => 'Proposal pengadaan wajib diisi',
            'proposal_pengadaan.mimetypes' => 'Proposal pengadaan wajib berformat pdf',
        ]);

        
        $data = $request->all();
        if($request->file('proposal_pengadaan')){
            $proposal=$request->file('proposal_pengadaan')->store('pengadaanBarang/proposal_pengadaan');
        }
        $data['proposal_pengadaan']=$proposal;
        Budjet::create($data);

        return redirect()->route('dpal.ebudjeting.index')->with(['success' => 'Pengadaan dapat berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $budjet = Budjet::where('id',$id)->first();
        return view('dpal.ebudjeting.show', compact('budjet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $budjet = Budjet::where('id',$id)->first();

        return view('dpal.ebudjeting.edit', compact('budjet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id)
    {
        $budjet = Budjet::where('id',$id)->first();

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
            'proposal_pengadaan' => 'mimetypes:application/pdf',

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
            'proposal_pengadaan.mimetypes' => 'Proposal pengadaan wajib berformat pdf',
        ]);

        if($request->file('proposal_pengadaan')){
            \Storage::delete($budjet->proposal_pengadaan);
            $proposal=$request->file('proposal_pengadaan')->store('pengadaanBarang/proposal_pengadaan');
        }else{
            $proposal=$budjet->proposal_pengadaan;
        }

        $data = [
            'nama_kegiatan' => $request->nama_kegiatan,
            'status' => $request->status,
            'unit_kerja_pengusul' => $request->unit_kerja_pengusul,
            'anggaran' => $request->anggaran,
            'rencana_belanja' => $request->rencana_belanja,
            'sisa_anggaran' => $request->sisa_anggaran,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'uraian' => $request->uraian,
            'proposal_pengadaan' => $proposal
        ];

        Budjet::where('id',$id)->update($data);

        return redirect()->route('dpal.ebudjeting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $budjet = Budjet::where('id',$id)->first();
        \Storage::delete($budjet->proposal_pengadaan);
        Budjet::destroy($id);
        return redirect()->route('dpal.ebudjeting.index');
    }
}
