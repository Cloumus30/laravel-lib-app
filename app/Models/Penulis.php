<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    protected $table = 'penulis';
    protected $fillable=[
        'nama',
        'tgl_lahir',
        'biografi',
        'nama_foto',
        'link_foto',
    ];
    public function buku(){
        return $this->hasMany(Buku::class,'penulis_id');
    }
}
