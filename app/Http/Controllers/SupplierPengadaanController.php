<?php

namespace App\Http\Controllers;

use App\Models\Budjet;
use App\Models\PengadaanBarang;
use App\Models\PengadaanSupplier;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SupplierPengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::where('user_id',auth()->id())->first();
        $pengsups = PengadaanSupplier::where('supplier_id',$supplier->id)->get();
        
        return view('supplier/pengadaanBarang/index', compact('pengsups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = Supplier::where('user_id',auth()->id())->first();
        // $pengsups = PengadaanSupplier::select('supplier_id')->where('supplier_id',$supplier->id)->get()->toArray();
        $pengadaans = PengadaanBarang::where('status_pengadaan',1)->get();
        // dd($pengsups);
        // for($i=0; $i<count($pengadaans); $i++){
        //     if(in_array($pengadaans[$i], $pengsups)){
        //         continue;
        //     }else{
        //         $pengadaans[$i];
        //     }
        // }

        // $pengadaans=PengadaanSupplier::get();
        // foreach ($pengadaans as $pengadaan) {
        //     $data[]= $pengadaan->id;
        // }
        // // dd($data);
        // $pengsup = PengadaanSupplier::where('supplier_id',$supplier->id)->whereNotIn('pengadaan_id',$data)->get();
        // dd($pengsup);

        // $checkPengadaan = PengadaanSupplier::where('status_pengadaan',1)->get();
        // dd($checkPengadaan);
        // $pengsups = DB::table('pengadaan_suppliers')
        // ->leftJoin('suppliers', 'pengadaan_suppliers.supplier_id', '!=', 'suppliers.id')
        // ->get();
        // $pengsups = DB::table('suppliers')->leftJoin('pengadaan_suppliers', 'suppliers.id', '!=', 'pengadaan_suppliers.supplier_id')->get();
        // $pengsups = DB::table('suppliers')->rightJoin('pengadaan_suppliers', 'suppliers.id', '!=', 'pengadaan_suppliers.supplier_id')->get();
        // $pengsups = DB::table('pengadaan_suppliers')->rightJoin('suppliers', 'pengadaan_suppliers.supplier_id', '!=', 'suppliers.id')->get();
        // $pengadaans = PengadaanBarang::where('status_pengadaan',1)->get();
        // $pengsups =PengadaanSupplier::where('supplier_id',$supplier->id)->first();

        // $pengsups = DB::table('pengadaan_suppliers')
        // ->select('budjets.nama_kegiatan','pengadaans.id')
        // ->leftJoin('suppliers', 'pengadaan_suppliers.supplier_id', '=', 'suppliers.id')
        // ->leftJoin('pengadaans', 'pengadaan_suppliers.pengadaan_id', '!=', 'pengadaans.id')
        // ->join('budjets','pengadaans.budjet_id', '=', 'budjets.id')
        // ->groupBy('budjets.nama_kegiatan','pengadaans.id')
        // // ->whereNotIn('pengadaan_id',[1,2])
        // ->get();

        // $pengsups = PengadaanSupplier::whereNotExists(function($query){
        //     $query->select(DB::raw(1))
        //         ->from('suppliers')
        //         ->whereRaw('pengadaan_supplier.supplier_id = supplier.id');
        // })->get();
        // dd($pengsups);

        // $pengsups = PengadaanBarang::whereNotIn('id',$pengsups->pengadaan_id)->get();
        // $suppliers =Supplier::whereNotIn('pengadaan_suppliers',)

        
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
     
        $supplier = Supplier::where('user_id',auth()->id())->first();
        
        if($request->file('proposal')){
            $proposal=$request->file('proposal')->store('pengadaanBarang/proposal');
        }

        $request->validate([
            'pengadaan_id' => 'required',
            'harga_penawaran' => 'required',
            'proposal' => 'required|mimetypes:application/pdf'
        ],[
            'pengadaan_id.required' => 'Pengadaan belum dipilih',
            // 'pengadaan_id.unique' => 'Pengadaan sudah dipilih',
            'harga_penawaran.required' => 'Harga penawaran wajib diisi',
            'proposal.required' => 'Proposal wajib diisi',
            'proposal.mimetypes' => 'Proposal wajib berformat pdf',
        ]);

        PengadaanSupplier::create([
            'pengadaan_id' => $request->pengadaan_id,
            'supplier_id' => $supplier->id,
            'status_supplier' => 'submitted',
            'proposal' => $proposal,
            'harga_penawaran' => $request->harga_penawaran,
        ]);

        return redirect()->route('supplier.pengadaanBarang.index')->with(['success' => 'Pengadaan dapat diikuti']);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $pengsup = PengadaanSupplier::where('id',$id)->first();
        return view('supplier/pengadaanBarang/detail', compact('pengsup'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengadaan = PengadaanSupplier::where('id',$id)->first();
        return view('supplier/pengadaanBarang/edit',compact('pengadaan'));
        
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSubmit(Request $request, $id)
    {
        $pengadaan = PengadaanSupplier::where('id',$id)->first();
        $pdf = $pengadaan->proposal;
        if($request->hasFile('proposal')){
            Storage::delete($pdf);
            $pdf = $request->file('pdf')->store('pengadaanBarang/proposal');
        }

        $pengadaan->update([
            'proposal' => $pdf,
            // 'harga_penawaran' => $request->harga_penawaran,
            'harga_terkoreksi' => $request->harga_terkoreksi,
            'supplier_ke_dpal' => $request->supplier_ke_dpal,
        ]);

        return redirect()->back();
    }

    public function updateSubmit2(Request $request, $id)
    {
        $pengadaan = PengadaanSupplier::where('id',$id)->first();
        $pdf = $pengadaan->proposal;
        // dd($pdf);
        if($request->hasFile('proposal')){
            Storage::delete($pdf);
            $pdf = $request->file('proposal')->store('pengadaanBarang/proposal');
        }

        $request->validate([
            'harga_penawaran' => 'required',
            'proposal' => 'required|mimetypes:application/pdf'
        ],[
            'harga_penawaran.required' => 'Harga penawaran wajib diisi',
            'proposal.required' => 'Proposal wajib diisi',
            'proposal.mimetypes' => 'Proposal wajib berformat pdf',
        ]);
        $pengadaan->update([
            'proposal' => $pdf,
            'harga_penawaran' => $request->harga_penawaran,
            // 'harga_terkoreksi' => $request->harga_terkoreksi,
        ]);

        return redirect()->back();
    }

    public function checkBuktiTf(Request $request, $id){
        $pengsup = PengadaanSupplier::where('id',$id)->first();
        
        // $checkBelumLunas = $request->status_supplier === 'belum_lunas';
        if($request->status_supplier === 'belum_lunas'){
            $request->validate([
                'status_supplier' => 'required',
                'alasan_gagal' => 'required'
            ],[
                'status_supplier.required' => 'Wajib pilih salah satu',
                'alasan_gagal.required' => 'Alasan belum lunas wajib diisi'
            ]);

            $pengsup->update([
                'status_supplier' => $request->status_supplier,
                'alasan_gagal' => $request->alasan_gagal,
            ]);
        }elseif ($request->status_supplier === 'selesai') {
            $request->validate([
                        'status_supplier' => 'required'
                    ],[
                        'status_supplier.required' => 'Wajib pilih salah satu'
                    ]); 
                    
                    $pengsup->update([
                        'status_supplier' => $request->status_supplier,
                    ]);
        }

        return redirect()->back();
  
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
