<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PengadaanBarang extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    protected $table='pengadaans';

    public function budjet(){
        return $this->belongsTo(Budjet::class);
    }

    public function suppliers(){
        return $this->BelongsToMany(Supplier::class);
    }

    public function pengadaanBarang(){
        return $this->hasMany(PengadaanBarang::class);
    }
}
