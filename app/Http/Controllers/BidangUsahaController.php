<?php

namespace App\Http\Controllers;

use App\Models\BidangUsaha;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BidangUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bingus = BidangUsaha::get();

        return view('dpal/bidangUsaha/index', compact('bingus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bingus = new BidangUsaha();
        return view('dpal/bidangUsaha/create',compact('bingus'));
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
            'nama_bingus' => 'required|unique:bidang_usahas'
        ],[
            'nama_bingus.required' => '_bingus bidang usaha wajib diisi',
            'nama_bingus.unique' => 'Nama bidang usaha sudah ada',
        ]);

        $data = $request->all();

        BidangUsaha::create($data);
        return redirect()->route('bingus.create')->with(['success' =>'Bidang usaha telah berhasil ditambah']);
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
        $bingus = BidangUsaha::where('id',$id)->first();
        return view('dpal/bidangUsaha/edit',compact('bingus'));
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
        $data = [
            'nama_bingus' => $request->nama_bingus
            
            ];

        BidangUsaha::where('id',$id)->update($data);

        return redirect()->route('bingus.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BidangUsaha::destroy($id);
        return redirect()->route('bingus.index');
    }
}
