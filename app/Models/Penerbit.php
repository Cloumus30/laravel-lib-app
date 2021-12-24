<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $table = 'penerbit';
    protected $fillable = [
        'alamat',
        'nama',
        'email',
        'telepon'
    ];
    public function buku(){
        return $this->hasMany(Buku::class,'penerbit_id');
    }
}
