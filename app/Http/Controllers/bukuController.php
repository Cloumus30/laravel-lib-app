<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    // Ambil Semua data buku
    public function semuaBuku(){
        $buku = Buku::with('penulis')->with('penerbit')->with('kategori')->get();
        return $buku;
        // return view('buku.index',[$buku]);
    }

    // Ambil Satu Buku
    public function satuBuku($id){
        $buku = Buku::with('penulis')->with('penerbit')->with('kategori')->find($id);
        return $buku;
    }   
    
    // Tambah Buku ke Database
    public function tambahBuku(Request $request,){
        $req = [
            'nama' => $request->input('nama'),
            'tahun' => $request->input('tahun'),
            'jumlah_hal' => $request->input('jumlah_hal'),
            'berat'=>$request->input('berat'),
            'isbn' => $request->input('isbn'),
            'link_beli'=>$request->input('link_beli'),
            'deskripsi'=>$request->input('deskripsi'),
            'penulis_id'=>$request->input('penulis_id'),
            'kategori_id'=>$request->input('kategori_id'),
            'penerbit_id'=>$request->input('penerbit_id'),
            'librarian_id'=>$request->input('librarian_id'),
        ];
        
        if($request->file('foto')){ //cek jika ada file terupload
            $foto = $request->file('foto');
            if($foto->isValid()){ //cek jika foto sudah terupload dengan benar
                $fotoUploaded = $foto->storeOnCloudinaryAs('lib_app','gambar11'); //upload foto ke cloudinary
                $fotoUrl = $fotoUploaded->getSecurePath();
                $fotoName = $fotoUploaded->getPublicId();
                // $delete = Cloudinary::destroy('dlyofehimvzhhoz7fayy');
                $req['nama_foto'] = $fotoName;
                $req['link_foto'] = $fotoUrl;
            }
        }else{
            $req['nama_foto'] = null;
            $req['link_foto'] = null;
        }
        $data = Buku::create($req);
        $res = [
            "notif" => "Data berhasil dimasukkan",
            "data" => $data,
        ];
        return $res;
    }

    // Update Data Buku di Database
    public function updateBuku(Request $request,$id){
        $dataLama = Buku::find($id);
        $req = [
            'nama' => $request->input('nama'),
            'tahun' => $request->input('tahun'),
            'jumlah_hal' => $request->input('jumlah_hal'),
            'berat'=>$request->input('berat'),
            'isbn' => $request->input('isbn'),
            'link_beli'=>$request->input('link_beli'),
            'deskripsi'=>$request->input('deskripsi'),
            'penulis_id'=>$request->input('penulis_id'),
            'kategori_id'=>$request->input('kategori_id'),
            'penerbit_id'=>$request->input('penerbit_id'),
            'librarian_id'=>$request->input('librarian_id'),
        ];

        
        if($request->file('foto')){ //cek jika foto diupload
            $foto = $request->file('foto');
            if($dataLama->nama_foto){ //cek jika ada foto lama maka dihapus
                $delete = Cloudinary::destroy($dataLama->nama_foto);
            }
            if($foto->isValid()){ //cek foto baru sudah terupload dengan benar
                $fotoUploaded = $foto->storeOnCloudinaryAs('lib_app','gambar14');
                $fotoUrl = $fotoUploaded->getSecurePath();
                $namaFoto = $fotoUploaded->getPublicId();

                $req['link_foto'] = $fotoUrl;
                $req['nama_foto'] = $namaFoto;
            }
            
        }

        $data = Buku::where('id',$id)->update($req); //update data
        $res = [
            "notif" => "Data berhasil diupdate",
            "data" => $data,
        ];
        return $res;
    }

    //Hapus Data Buku dari Database
    public function hapusBuku($id){
        $data = Buku::find($id);
        if($data->nama_foto){
            $delete = Cloudinary::destroy($data->nama_foto); //hapus buku dari cloudinary
        }
        $delete = Buku::destroy($id);
        $res = [
            'notif' => 'Data Berhasil dihapus',
            'data' => $delete,
        ];
        return $res;
    }
}
