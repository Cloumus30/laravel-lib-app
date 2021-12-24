<?php

namespace App\Http\Controllers;

use App\Models\User;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class superAdminController extends Controller
{
    //
    public function semuaUser(){
        $data = User::with('role')->get();
        if($data){
            $res['notif'] = 'data ditemukan';
        }else{
            $res['notif'] = 'tidak ada user';
        }
        $res['data'] = $data;
        return $res;
    }

    public function tambahLibrarian(Request $request){
        $req = [
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'email' => $request->input('email'),
            'status' => $request->input('status'),
            'role_id' => 2,
        ];

        if($request->file('foto')){
            $foto = $request->file('foto');
            if($foto->isValid()){
                $uploadedFoto = $foto->storeOnCloudinaryAs('lib_app/user','gambar11');
                $fotoUrl = $uploadedFoto->getSecurePath();
                $fotoName = $uploadedFoto->getPublicId();
                $req['nama_foto'] = $fotoName;
                $req['link_foto'] = $fotoUrl;
            }
        }else{
            $req['nama_foto'] = null;
            $req['link_foto'] = null;
        }
        // return $req;
        $data = User::create($req);
        $res = [
            "notif" => "Data Librarian berhasil dimasukkan",
            "data" => $data,
        ];

        return $res;
    }

    public function updateLibrarian(Request $request, $id){
        $dataLama = User::find($id);
        $req = [
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'email' => $request->input('email'),
            'status' => $request->input('status'),
            'role_id' => 2,
        ];

        if($request->file('foto')){
            $foto = $request->file('foto');
            if($dataLama->nama_foto){
                $delete = Cloudinary::destroy($dataLama->nama_foto);            
            }
            if($foto->isValid()){
                $uploadedFoto = $foto->storeOnCloudinaryAs('lib_app/user','gambar14');
                $fotoUrl = $uploadedFoto->getSecurePath();
                $fotoName = $uploadedFoto->getPublicId();
                $req['nama_foto'] = $fotoName;
                $req['link_foto'] = $fotoUrl;
            }
        }

        $data = User::where('id',$id)->update($req);
        $res = [
            'notif'=>'Data User berhasil di update',
            'data' => $data,
        ];

        return $res;
    }

    public function hapusLibrarian($id){
        $data = User::find($id);
        if($data->nama_foto){
            Cloudinary::destroy($data->nama_foto);
        }
        $delete = User::destroy($id);
        $res = [
            "notif" => "Hapus Data Berhasil",
            "data" => $delete,
        ];
        return $res;
    }

    public function nonActiveLibrarian($id){
        $req =[
            'status'=>0,
        ];
        User::where('id',$id)->update($req);
        $data = User::find($id);
        $res = [
            'notif'=>'user '.$data->nama.' berhasil di nonaktifkan',
            'data' => $data
        ];
        return $res;
    }

    public function activeLibrarian($id){
        $req =[
            'status'=>1,
        ];
        User::where('id',$id)->update($req);
        $data = User::find($id);
        $res = [
            'notif'=>'user '.$data->nama.' berhasil diaktifkan',
            'data' => $data
        ];
        return $res;
    }
}
