@extends('layouts.main')

@section('head')

@endsection

@section('title')
    Tambah Penerbit Buku
@endsection

@section('body')
        <div class="container mb-5">
            <h1 class="my-5 text-center">Tambah Penerbit</h1>
            <form action="{{url('/penerbit-tambah/')}}" method="post">
                <div class="row">
                    <div class="col-12 mb-4">
                        <label for="nama" class="form-label">Nama Penerbit </label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="email" class="form-label">Email Penerbit </label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="tel" name="telepon" id="telepon" class="form-control">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="alamat" class="form-label">Alamat Penerbit </label>
                        <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Tambah</button>        
                    </div>
                </div>
                
            </form>
        </div>

        
@endsection