<?php

namespace App\Http\Controllers;

use App\Models\Budjet;
use App\Models\PengadaanBarang;
use App\Models\PengadaanSupplier;
use App\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PengadaanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengadaans = PengadaanBarang::get();

        return view('dpal/pengadaanBarang/index', compact('pengadaans'));
    }

    public function create()
    {
        // $test = DB::table('pengadaans')
        // ->join('budjets', 'pengadaans.budjet_id', '=', 'budjets.id')
        // ->whereNotIn('pengadaans.budjet_id','budjets.id')->get();
        // dd($test);
        $budjets = Budjet::where('status', 'dapat di ajukan')->get();
        $pengadaans = PengadaanBarang::where('status_pengadaan',1)->get();
        // dd($pengadaans);
        
        // dd($budjets);
        return view('dpal/pengadaanBarang/pengadaanBarang/create', compact('budjets'));   
    }

    public function store(Request $request)
    {
        PengadaanBarang::create([
            'budjet_id' => $request->nama_kegiatan,
            'status_pengadaan' => 1,
            'status_proses' => 'proses',
            'tgl_pengumuman_pemenang' =>null,
        ]);
        
        return redirect()->route('dpal.pengadaanBarang.index');
    }

    public function detail()
    {
        return view('dpal/pengadaanBarang/pengadaanBarang/detail');
        
    }
    
    public function edit($id)
    {
        $pengadaan = PengadaanBarang::where('id',$id)->first();
        return view('dpal/pengadaanBarang/pengadaanBarang/edit', compact('pengadaan'));
    }

    public function update(Request $request, $id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();
        // dd($request);
        if($request->has('status_pengadaan')){
            $pengadaan->update([
                'status_pengadaan' => 1,
                'status_proses' => 'proses'
            ]);
        }else{
            $pengadaan->update([
                'status_pengadaan' => 0,
                'status_proses' => 'proses'
            ]);
        }
        
        return redirect()->route('dpal.pengadaanBarang.index');
    }

    public function detailTahap()
    {
        return view('dpal/pengadaanBarang/tahap/detailTahap');
    }

    public function pengumumanPengadaan($id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();
        $pengsups = PengadaanSupplier::where('pengadaan_id',$pengadaan->id)->get();
        // $pengsup = PengadaanSupplier::where('pengadaan_id',$pengadaan->id)->first();
        return view('dpal/pengadaanBarang/pengumumanPengadaan',compact('pengadaan','pengsups'));
    }
    
    

    public function pesertaPengadaan($id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();
        // $pengsup = PengadaanSupplier::where('pengadaan_id',$pengadaan->id)->first();
        $pengsups = PengadaanSupplier::where('pengadaan_id',$pengadaan->id)->get();
        return view('dpal/pengadaanBarang/pesertaPengadaan/pesertaPengadaan',compact('pengadaan','pengsups'));
    }

    public function formTolak(Request $request, $id){
        // $pengadaan = PengadaanBarang::where('id',$id)->first();
        $pengsup = PengadaanSupplier::where('id',$id)->first();
        // dd($pengsups);
        // dd($pengsups);
        $pengsup->update([
            'status_supplier' => 'tolak',
            'alasan_penolakan' => $request->alasan_penolakan,
        ]);

        return redirect()->route('dpal.pengadaanBarang.pesertaPengadaan', $pengsup->pengadaan_id);
    }

    public function formEvaluasi(Request $request, $id){
        $pengsup = PengadaanSupplier::where('id',$id)->first();
        $data = [
            'status_supplier' => 'evaluasi',
        ];
        $pengsup->update($data);
        return redirect()->route('dpal.pengadaanBarang.pesertaPengadaan', $pengsup->pengadaan_id);
    }

    public function pesertaEvaluasi($id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();
        $pengsups = PengadaanSupplier::where('pengadaan_id',$pengadaan->id)->where('status_supplier','evaluasi')->orWhere('status_supplier','acc')->orWhere('status_supplier','validasi')->orWhere('status_supplier','selesai')->orWhere('status_supplier','belum_lunas')->get();
        // dd($pengsups);
        return view('dpal/pengadaanBarang/pesertaPengadaan/pesertaEvaluasi', compact('pengadaan','pengsups'));

    }

    public function editHasilEvaluasi($id){
        // $pengadaan = PengadaanBarang::where('id',$id)->first();
        // dd($pengadaan);
        $pengsup = PengadaanSupplier::where('id',$id)->first();
        // dd($pengsups);

        return view('dpal/pengadaanBarang/evaluasi/editHasilEvaluasi',compact('pengsup'));

    }

    public function formDpalKeSupplier(Request $request, $id){
        $pengsups = PengadaanSupplier::where('id',$id)->first();
        $data = [
            'dpal_ke_supplier' => $request->dpal_ke_supplier
        ];

        $pengsups->update($data);

        return redirect()->back();
    }

    public function detailPesertaPengadaan($id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();
        $supplier = Supplier::where('id',$id)->first();
        $roleId = DB::table('model_has_roles')->where('model_id',$supplier->id)->first();
        $user = DB::table('roles')->where('id',$roleId->role_id)->first();
        // dd($user);
        $pengsup = PengadaanSupplier::where('supplier_id',$supplier->id)->first();
        // dd($pengsup);
        return view('dpal/pengadaanBarang/pesertaPengadaan/detailPesertaPengadaan',compact('pengadaan','pengsup', 'user','supplier'));

    }
    
    public function detailProdukPesertaPengadaan($id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();

        return view('dpal/pengadaanBarang/pesertaPengadaan/detailProdukPesertaPengadaan',compact('pengadaan'));

    }

    public function hasilEvaluasi($id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();
        $pengsups = PengadaanSupplier::where('pengadaan_id',$pengadaan->id)->where('status_supplier','evaluasi')->orWhere('status_supplier','acc')->orWhere('status_supplier','validasi')->orWhere('status_supplier','selesai')->orWhere('status_supplier','belum_lunas')->get();
        // dd($pengsups);
        return view('dpal/pengadaanBarang/evaluasi/hasilEvaluasi', compact('pengadaan','pengsups'));

    }

    public function formPemenang(Request $request, $id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();
        $pemenangs = $request->pemenang;
        // dd($pemenangs);
        foreach ($pemenangs as $pemenang) {
            $pemenang;
            $pengsup = PengadaanSupplier::where('pengadaan_id',$pengadaan->id)->where('status_supplier','evaluasi')->where('supplier_id',$pemenang)->first();
                $pengsup->update(
                    [
                        'status_supplier' => 'acc',
                    ]
                    );
                   
        }
        $thisTime = Carbon::now();
        $pengadaan->update([
            'tgl_pengumuman_pemenang' => $thisTime,
        ]);
        return redirect()->route('dpal.pengadaanBarang.pemenang',$pengadaan->id);
    }

    public function pemenang($id){
        $pengadaan = PengadaanBarang::where('id',$id)->first();
        $pengsups = PengadaanSupplier::where('pengadaan_id',$pengadaan->id)->where('status_supplier','acc')->orWhere('status_supplier','validasi')->orWhere('status_supplier','selesai')->orWhere('status_supplier','belum_lunas')->get();
        // $pengsups = PengadaanSupplier::where('pengadaan_id',$pengadaan->id)->where('status_supplier','acc')->orWhere('status_supplier','validasi')->get();
        // dd($pengadaan);
        return view('dpal/pengadaanBarang/pemenang/pemenang', compact('pengadaan','pengsups'));
    }

    public function formBuktiTf(Request $request, $id){
        $pengsup = PengadaanSupplier::where('id',$id)->first();
        // dd($pengsup);
        $bukti_tf = $pengsup->bukti_tf;
        if($request->hasFile('bukti_tf')){
            Storage::delete($bukti_tf);
            $bukti_tf = $request->file('bukti_tf')->store('pengadaanBarang/bukti_tf');
        }
        
        $pengsup->update([
            'nominal_tf' => $request->nominal_tf,
            'bukti_tf' => $bukti_tf,
            'status_supplier' => 'validasi'
        ]);

        return redirect()->back();
    }

    public function checkBuktiTf(Request $request, $id){
        $pengsup = PengadaanSupplier::where('id',$id)->first();
        $checkSupplier = PengadaanSupplier::where('pengadaan_id',$pengsup->pengadaan_id)->where('status_supplier','validasi')->get();
        $pengadaan = PengadaanBarang::where('id',$pengsup->pengadaan_id)->first();

        $pengsup->update([
            'status_supplier' => $request->status_supplier,
        ]);

        return redirect()->back();
  
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
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
