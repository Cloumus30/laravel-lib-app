@extends('layouts.main')

@section('head')

@endsection

@section('title')
   Update Penulis Buku
@endsection

@section('body')
        <div class="container mb-5">
            <h1 class="my-5 text-center">Edit Penulis</h1>
            <form action="{{url('/penulis-update/'.$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 mb-4">
                        <label for="nama" class="form-label">Nama Penulis </label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{$data->nama}}">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir </label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{$data->tgl_lahir}}">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="biografi" class="form-label">Biografi </label>
                        <textarea name="biografi" id="biografi" cols="30" rows="10" class="form-control">{{$data->biografi}}</textarea>
                    </div>

                    <div class="col-lg-6 col-sm-12 mb-4">
                        <label for="foto" class="form-label">Foto Penulis</label>
                        <input class="form-control" type="file" id="foto" name="foto">
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-4 text-center">
                        @if ($data->link_foto)
                        <img src="{{$data->link_foto}}" alt="{{$data->nama_foto}}" width="150px">
                        @else
                        <h3>Belum Ada Gambar</h3>
                        @endif
        
                    </div>

                </div>     
                
                <button class="btn btn-primary" type="submit">Update Penulis</button>
            </form>
        </div>

        
@endsection