<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';

    protected $guarded =[];
    
    public function kategori(){
        return $this->belongsTo(Kategori::class,'kategori_id');
    }

    public function penulis(){
        return $this->belongsTo(Penulis::class,'penulis_id');
    }

    public function penerbit(){
        return $this->belongsTo(Penerbit::class,'penerbit_id');
    }
}
