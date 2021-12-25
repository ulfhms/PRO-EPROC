<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ViewFileController extends Controller
{
    public function download(Request $request, $filename){
        // dd($filename);
        $path = 'pengadaanBarang/proposal/'.$filename;
        if(Storage::exists($path)){
            return Storage::response($path);
        }

        return abort(404);
    }
    
    public function buktiTf(Request $request, $filename){
        // dd($filename);
        $path = 'pengadaanBarang/buktiTf/'.$filename;
        if(Storage::exists($path)){
            return Storage::response($path);
        }

        return abort(404);
    }
}
