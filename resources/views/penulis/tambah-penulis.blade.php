@extends('layouts.main')

@section('head')

@endsection

@section('title')
    Tambah Penulis Buku
@endsection

@section('body')
        <div class="container mb-5">
            <h1 class="my-5 text-center">Tambah Penulis</h1>
            <form action="{{url('/penulis-tambah/')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 mb-4">
                        <label for="nama" class="form-label">Nama Penulis </label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir </label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="biografi" class="form-label">Biografi </label>
                        <textarea name="biografi" id="biografi" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="col-12 mb-4">
                        <label for="foto" class="form-label">Foto Penulis</label>
                        <input class="form-control" type="file" id="foto" name="foto">
                    </div>

                </div>     
                
                <button class="btn btn-primary" type="submit">Tambah Penulis</button>
            </form>
        </div>

        
@endsection