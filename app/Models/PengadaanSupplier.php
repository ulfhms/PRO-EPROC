<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengadaanSupplier extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    // protected $fillable=['pengadaan_id','supplier_id','status_supplier','proposal','harga_penawaran','harga_terkoreksi','dpal_ke_supplier','supplier_ke_dpal','alasan_penolakan','bukti_tf'];
    protected $table='pengadaan_suppliers';

    public function pengadaan(){
        return $this->belongsTo(PengadaanBarang::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
}
