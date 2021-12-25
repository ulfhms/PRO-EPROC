<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class viewBuktiTfController extends Controller
{
    public function buktiTf(Request $request, $filename){
        $path = 'pengadaanBarang/bukti_tf/'.$filename;
        // dd($path);
        if(Storage::exists($path)){
            return Storage::response($path);
        }

        return abort(404);
    }
}
