<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penulisController extends Controller
{
    // Ambil semua Data Penulis dan buku karya
    public function semuaPenulis(){
        $data = Penulis::with('buku')->get();
        
        if($data){
            $res['notif'] = 'Data Penulis Ditemukan';
        }else{
            $res['notif'] = 'Data Penulis tidak Ditemukan';
        }
        $res['data'] = $data;

        return $res;
    }

    // Ambil Satu Data Penulis
    public function satuPenulis($id){
        $data = Penulis::with('buku')->find($id);
        if($data){
            $res['notif'] = 'Data Penulis Ditemukan';
        }else{
            $res['notif'] = 'Data Penulis tidak Ditemukan';
        }
        $res['data'] = $data;

        return $res;
    }

    // Tambah Data Penulis
    public function tambahPenulis(Request $request){
        $req = [
            'nama' => $request->nama,
            'tgl_lahir' => $request->input('tgl_lahir'),
            'biografi' => $request->input('biografi'),
        ];
        
        if($request->file('foto')){
            $foto = $request->file('foto');
            if($foto->isValid()){
                $uploadedFoto = $foto->storeOnCloudinaryAs('lib_app/penulis','gambar11');
                $fotoUrl = $uploadedFoto->getSecurePath();
                $fotoName = $uploadedFoto->getPublicId();
                $req['nama_foto'] = $fotoName;
                $req['link_foto'] = $fotoUrl;
            }
        }else{
            $req['nama_foto'] = null;
            $req['link_foto'] = null;
        }

        try {
            $data = Penulis::create($req);
            if($data){
                $res['notif'] = 'Data Penulis berhasil ditambahkan';
            }
            $res['data'] = $data;

            return $res;
        } 
        catch (\Throwable $th) {
            $res['notif'] = 'Data Penulis gagal ditambahkan, koneksi Database bermasalah';
            Cloudinary::destroy($fotoName); //hapus foto dari cloudinary jika ada tidak dapat memasukkan data
            abort(500,'Koneksi Database Bermasalah.');
        }
        
    }

    // Update Data Penulis
    public function updatePenulis(Request $request, $id){
        $dataLama = Penulis::find($id);
        $req = [
            'nama' => $request->nama,
            'tgl_lahir' => $request->input('tgl_lahir'),
            'biografi' => $request->input('biografi'),
        ];
        
        if($request->file('foto')){
            $foto = $request->file('foto');
            if($dataLama->nama_foto){
                Cloudinary::destroy($dataLama->nama_foto);
            }
            if($foto->isValid()){
                $uploadedFoto = $foto->storeOnCloudinaryAs('lib_app/penulis','gambar14');
                $fotoUrl = $uploadedFoto->getSecurePath();
                $fotoName = $uploadedFoto->getPublicId();
                $req['nama_foto'] = $fotoName;
                $req['link_foto'] = $fotoUrl;
            }
        }

        try {
            $data = Penulis::where('id',$id)->update($req);
            if($data){
                $res['notif'] = 'Data Penulis berhasil diupdate';
            }
            $res['data'] = $data;

            return $res;
        } 
        catch (\Throwable $th) {
            $res['notif'] = 'Data Penulis gagal diupdate, koneksi Database bermasalah';
            abort(500,'Koneksi Database Bermasalah.');
        }
    }

}
