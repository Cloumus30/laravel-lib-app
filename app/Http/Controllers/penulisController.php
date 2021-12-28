<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Carbon\Carbon;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penulisController extends Controller
{
    // Pergi ke halaman tambah Penulis
    public function tambahPenulisPage(){
        return view('penulis.tambah-penulis');
    }

    // Pergi ke Halaman Update Penulis
    public function updatePenulisPage($id){
        $data = Penulis::find($id);
        return view('penulis.update-penulis',['data'=>$data]);
    }

    // Ambil semua Data Penulis dan buku karya
    public function semuaPenulis(){
        $data = Penulis::all();
        
        if($data){
            $res['notif'] = 'Data Penulis Ditemukan';
        }else{
            $res['notif'] = 'Data Penulis tidak Ditemukan';
        }
        $res['data'] = $data;

        // return $res;
        return view('penulis.index',['data'=>$data]);
        
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

        // return $res;
        return view('penulis.detail-penulis',['data'=>$data]);
    }

    // Tambah Data Penulis
    public function tambahPenulis(Request $request){
        $dt = Carbon::create($request->input('tgl_lahir'))->format('Y-m-d');
        $req = [
            'nama' => $request->nama,
            'tgl_lahir' => $dt,
            'biografi' => $request->input('biografi'),
        ];
        if($request->file('foto')){
            $foto = $request->file('foto');
            if($foto->isValid()){
                $uploadedFoto = $foto->storeOnCloudinaryAs('lib_app/penulis',$req['nama'].$dt);
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

            // return $res;
            return redirect('/penulis');
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
        $dtName = Carbon::create($request->input('tgl_lahir'))->format('Y-m-d');
        if(!$request->tgl_lahir){
            $dt = Carbon::now()->format('Y-m-d');
        }else{
            $dt = Carbon::create($request->input('tgl_lahir'))->format('Y-m-d');
        }
        $req = [
            'nama' => $request->nama,
            'tgl_lahir' => $dtName,
            'biografi' => $request->input('biografi'),
        ];
        
        if($request->file('foto')){
            $foto = $request->file('foto');
            if($dataLama->nama_foto){
                Cloudinary::destroy($dataLama->nama_foto);
            }
            if($foto->isValid()){
                $uploadedFoto = $foto->storeOnCloudinaryAs('lib_app/penulis',$req['nama'].$dt);
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

            // return $res;
            return redirect('/penulis');
        } 
        catch (\Throwable $th) {
            $res['notif'] = 'Data Penulis gagal diupdate, koneksi Database bermasalah';
            abort(500,'Koneksi Database Bermasalah.');
        }
    }

}
