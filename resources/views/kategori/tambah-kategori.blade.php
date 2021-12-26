@extends('layouts.main')

@section('head')

@endsection

@section('title')
    Tambah Kategori Buku
@endsection

@section('body')
        <div class="container mb-5">
            <h1 class="my-5 text-center">Tambah Kategori</h1>
            <form action="{{url('/kategori-buku-tambah/')}}" method="post">
                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control"><br>
                <button class="btn btn-primary" type="submit">Tambah</button>
            </form>
        </div>

        
@endsection