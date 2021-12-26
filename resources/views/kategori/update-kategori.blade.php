@extends('layouts.main')

@section('head')

@endsection

@section('title')
    Edit Kategori Buku
@endsection

@section('body')
        <div class="container mb-5">
            <h1 class="my-5 text-center">Update Kategori: </h1>
            <form action="{{url('/kategori-buku-update/'.$data->id)}}" method="post">
                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="{{$data->nama_kategori}}"><br>
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>

        
@endsection