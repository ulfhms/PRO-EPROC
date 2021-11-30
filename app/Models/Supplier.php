<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    protected $table='suppliers';


    public function bank(){
        return $this->belongsTo(Bank::class);
    }
    
    public function bidang_usaha(){
        return $this->belongsTo(BidangUsaha::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
