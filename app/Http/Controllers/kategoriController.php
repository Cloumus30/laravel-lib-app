<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    //Pergi ke Halaman Kategori update
    public function kategoriUpdatePage($id){
        $data = Kategori::find($id);
        return view('kategori.update-kategori',['data'=>$data]);
    }

    // Pergi ke Halaman Tambah Kategori
    public function kategoriTambahPage(){
        return view('kategori.tambah-kategori');
    }

    //Ambil Semua Data kategori
    public function semuaKategori(){
        $data = Kategori::all();
        if($data){
            $res['notif'] = 'Data Kategori Ditemukan';
        }else{
            $res['notif'] = 'Data Kategori Tidak Ditemukan';
        }
        $res['data'] = $data;
        // return $res;
        return view('kategori.index',['data'=>$data]);
    }

    // Ambil Satu kategori dengan buku"nya
    public function satuKategori($id){
        $data = Kategori::with('buku')->find($id);
        // $data = Buku::where('kategori_id',$id)->with('penulis')->get();
        if($data){
            $res['notif'] = 'Data Kategori Ditemukan';
        }else{
            $res['notif'] = 'Data Kategori Tidak Ditemukan';
        }
        $res['data'] = $data;
        
        return view('kategori.buku-kategori',['data'=>$data]);
        // return $res;
    }

    // Tambah Data Kategori
    public function tambahKategori(Request $request){
        $data = Kategori::create([
            'nama_kategori' => $request->input('nama_kategori'),
        ]);
        if($data){
            $res['notif'] = 'Data Kategori berhasil ditambahkan';
        }else{
            $res['notif'] = 'Data Kategori Gagal Ditambahkan';
        }
        $res['data'] = $data;

        // return $res;
        return redirect('/kategori-buku');
    }

    // Update Data Kategori
    public function updateKategori(Request $request,$id){
        $data = Kategori::where('id',$id)->update([
            'nama_kategori' => $request->input('nama_kategori'),
        ]);

        if($data){
            $res['notif'] = 'Data Kategori berhasil diupdate';
        }else{
            $res['notif'] = 'Data Kategori Gagal Diupdate';
        }
        $res['data'] = $data;

        return redirect('/kategori-buku');
        // return $res;
    }
}
