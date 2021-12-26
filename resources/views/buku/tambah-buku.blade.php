@extends('layouts.main')

@section('head')

@endsection

@section('title')
    Tambah Kategori Buku
@endsection

@section('body')
        <div class="container mb-5">
            <h1 class="my-5 text-center">Tambah Kategori</h1>
            <form action="{{url('/buku-tambah/')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 mb-4">
                        <label for="nama" class="form-label">Judul Buku </label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="col-lg-4 col-sm-12 mb-lg-4">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="text" name="tahun" id="tahun" class="form-control">
                    </div>
                    <div class="col-lg-4 col-sm-12 mb-lg-4">
                        <label for="jumlah_hal" class="form-label">Jumlah Halaman</label>
                        <input type="number" name="jumlah_hal" id="jumlah_hal" class="form-control">
                    </div>
                    <div class="col-lg-4 col-sm-12 mb-lg-4">
                        <label for="berat" class="form-label">Berat</label>
                        <input type="text" name="berat" id="berat" class="form-control">
                    </div>
                    <div class="col-12 mb-4">
                    
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" name="isbn" id="isbn" class="form-control">
                    
                    </div>
                    <div class="col-12 mb-4">
                        
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskipsi" class="form-control" id="deskripsi" cols="30" rows="10"></textarea>
                        
                    </div>
                    <div class="col-lg-8 col-sm-12 mb-lg-4">
                        <label for="penulis_id" class="form-label">Penulis</label>
                        <select class="form-select" name="penulis_id" required>
                            <option selected>Pilih Nama Penulis</option>
                            @foreach ($penulis as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 col-sm-12 mb-lg-4">
                        <label for="kategori_id" class="form-label">Kategori Buku</label>
                        <select class="form-select" name="kategori_id" required>
                            <option selected>Pilih Kategori</option>
                            @foreach ($kategori as $item)
                                <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 mb-4">
                        <label for="penerbit_id" class="form-label">Penerbit</label>
                        <select class="form-select" name="penerbit_id" required>
                            <option selected>Pilih Penerbit Buku</option>
                            @foreach ($penerbit as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12 mb-4">
                        <label for="foto" class="form-label">Gambar Buku</label>
                        <input class="form-control" type="file" id="foto" name="foto">
                    </div>

                </div>     
                
                <button class="btn btn-primary" type="submit">Tambah Buku</button>
            </form>
        </div>

        
@endsection