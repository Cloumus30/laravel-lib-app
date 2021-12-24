<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class penerbitController extends Controller
{
    //Ambil Semua data Penerbit
    public function semuaPenerbit(){
        $data = Penerbit::all();
        if($data){
            $res['notif']='Data Ditemukan';
        }else{
            $res['notif'] = 'Data Tidak Ditemukan';
        }
        $res['data'] = $data;

        return $res;
    }

    // Ambil Satu data Penerbit sesuai dengan id
    public function satuPenerbit($id){
        $data = Penerbit::with('buku')->find($id);
        if($data){
            $res['notif']='Data Ditemukan';
        }else{
            $res['notif'] = 'Data Tidak Ditemukan';
        }
        $res['data'] = $data;

        return $res;
    }

    // Masukkan penerbit baru
    public function tambahPenerbit(Request $request){
        $req=[
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'telepon' => $request->input('telepon'),
        ];
        $data=Penerbit::create($req);
        if($data){
            $res['notif'] = 'Data berhasil dimasukkan';
        }else{
            $res['notif'] = 'Data gagal dimasukkan';
        }
        $res['data'] = $data;

        return $res;
    }

    // Update Data Penerbit
    public function updatePenerbit(Request $request,$id){
        $req=[
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'telepon' => $request->input('telepon'),
        ];
        $data=Penerbit::where('id',$id)->update($req);
        if($data){
            $res['notif'] = 'Data berhasil diupdate';
        }else{
            $res['notif'] = 'Data gagal diupdate';
        }
        $res['data'] = $data;

        return $res;
    }

    // 
}
