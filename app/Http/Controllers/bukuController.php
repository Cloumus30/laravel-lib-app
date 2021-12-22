<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    // Ambil Semua data buku
    public function semuaBuku(){
        $buku = Buku::with('penulis')->with('penerbit')->with('kategori')->get();
        return $buku;
        // return view('buku.index',[$buku]);
    }

    public function satuBuku($id){
        $buku = Buku::with('penulis')->with('penerbit')->with('kategori')->find($id);
        return $buku;
    }   
    
    public function tambahBuku(Request $request,){
        $req = [
            'nama' => $request->input('nama'),
            'tahun' => $request->input('tahun'),
            'jumlah_hal' => $request->input('jumlah_hal'),
            // 'foto'=>$request->file('foto')->getClientOriginalName(),
            'berat'=>$request->input('berat'),
            'isbn' => $request->input('isbn'),
            'link_beli'=>$request->input('link_beli'),
            'deskripsi'=>$request->input('deskripsi'),
            'penulis_id'=>$request->input('penulis_id'),
            'kategori_id'=>$request->input('kategori_id'),
            'penerbit_id'=>$request->input('penerbit_id'),
            'librarian_id'=>$request->input('librarian_id'),
        ];
        $foto = $request->file('foto');
        if($foto->isValid()){
            $req['foto'] = $foto->path();
        }

        return $req;
    }
}
