@extends('layouts.main')

@section('head')

@endsection

@section('title')
    Kategori Buku
@endsection

@section('body')
    <div class="container">
        <h1 class="my-5 text-center">Daftar Kategori Buku</h1>
        <div class="text-end">
            <a href="{{url('/kategori-buku-tambah')}}" class="text-end btn btn-primary">Tambah Kategori</a>
        </div>
        
        <div class="section-1 my-5">
            <div class="row">
                @foreach ($data as $item)
                <div class="col-6">
                    <ul class="">
                        <li>
                            @auth
                            <a href="{{url('/kategori-buku-update/'.$item->id)}}" class="btn btn-warning btn-sm">Edit</a>    
                            @endauth
                            
                            <a href="{{url('/kategori-buku/'.$item->id)}}">{{$item->nama_kategori}}</a>
                            
                        </li>
                    </ul>
                </div>    
                @endforeach
                
                
            </div>
        </div>

    </div>
@endsection