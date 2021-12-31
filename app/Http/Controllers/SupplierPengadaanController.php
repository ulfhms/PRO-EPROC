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
        $pengsups = PengadaanSupplier::where('supplier_id',$supplier->id)->paginate(20);
        
        return view('supplier/pengadaanBarang/index', compact('pengsups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $supplier = Supplier::where('user_id',auth()->id())->first();
        $pengadaans = PengadaanBarang::where('status_pengadaan',1)->get();
        $pengsups = PengadaanSupplier::where('supplier_id',$supplier->id)->get();
        if($pengsups->count()>0){
            foreach ($pengsups as $pengsup ) {
                $data['pengadaan_id'][] = $pengsup->pengadaan_id;
            }
            
            // dd(count($pengadaans)!=0);
            // if(count($pengadaans)!=0){
                foreach ($pengadaans as $pengadaan ) {
                    if(!in_array($pengadaan->id, $data['pengadaan_id'])){
                        $data['pengadaans'][]=$pengadaan;
                    }
                }
            // }else{
            //     $data['pengadaans'] = $pengadaans;
            // }
        }else{
            $data['pengadaans'] = $pengadaans;
        }

        // dd($data);
        
        return view('supplier/pengadaanBarang/create', compact('data'));
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
            'harga_penawaran' => 'required|numeric',
            'proposal' => 'required|mimetypes:application/pdf'
        ],[
            'pengadaan_id.required' => 'Pengadaan belum dipilih',
            // 'pengadaan_id.unique' => 'Pengadaan sudah dipilih',
            'harga_penawaran.required' => 'Harga penawaran wajib diisi',
            'harga_penawaran.numeric' => 'Harga penawaran hanya berisi angka',
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
