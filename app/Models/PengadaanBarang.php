<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengadaanBarang extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    protected $table='pengadaans';

    public function budjet(){
        return $this->belongsTo(Budjet::class);
    }
}
