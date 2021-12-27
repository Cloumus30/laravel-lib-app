@extends('layouts.main')

@section('head')

@endsection

@section('title')
    Semua Buku
@endsection

@section('body')
    <h1 class="text-center">Daftar Semua Buku</h1>
    <div class="container">
        <div class="row my-5">
            @foreach ($data as $item)
                <div class="col-lg-3 col-md-12 mt-5 mx-3">
                    <div class="card mx-sm-auto mx-md-0" style="width: 15rem;">
                        @if ($item->link_foto)
                        <img src="{{$item->link_foto}}" class="card-img-top align-self-center" alt="gambar buku" style="width: 10rem">
                        @else
                        <img src="{{url('/img/github.png')}}" class="card-img-top align-self-center" alt="gambar buku" style="width: 10rem">
                        @endif
                        <div class="card-body">
                        <h5 class="card-title">{{$item->nama}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Penulis: {{$item->penulis->nama}}</h6>
                        <a href="{{url('/buku/'.$item->id)}}" class="btn btn-success">Lihat Buku</a>
                        @auth
                        <a href="{{url('/buku-update/'.$item->id)}}" class="btn btn-warning text-white">Edit Buku</a>    
                        @endauth
                        
                        </div>
                    </div>
                </div>    
            @endforeach
           
        </div>
    </div>

        
@endsection