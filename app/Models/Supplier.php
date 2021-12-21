<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    protected $table='suppliers';


    public function bank(){
        return $this->belongsTo(Bank::class);
    }
    
    public function bidangusaha(){
        return $this->belongsTo(BidangUsaha::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pengadaanBarang(){
        return $this->hasMany(PengadaanBarang::class);
    }
}
