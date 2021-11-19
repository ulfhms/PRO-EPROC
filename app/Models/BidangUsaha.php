<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangUsaha extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    // protected $primaryKey=['id'];
    protected $table='bidang_usahas';
}
