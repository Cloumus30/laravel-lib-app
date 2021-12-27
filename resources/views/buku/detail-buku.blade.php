@extends('layouts.main')

@section('head')

@endsection

@section('title')
    Semua Buku
@endsection

@section('body')
    <div class="container my-5">
        <div class="row my-5 justify-content-center">
           <div class="col-5 align-self-center">
               @if ($data->link_foto)
               <img src="{{$data->link_foto}}" alt="{{$data->nama_foto}}" style="width: 80%" class="text-start">    
               @else
               <img src="{{url('/img/github.png')}}" alt="" style="width: 80%" class="text-start">    
               @endif
               
           </div>

           <div class="col-7">
               <table class="table">
                   <tr>
                       <td class="text-nowrap">Judul Buku: </td>
                        <td>{{$data->nama}}</td>
                   </tr>
                   
                    <tr>
                        <td class="text-nowrap">Tahun: </td>
                        <td>{{$data->tahun}}</td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">Jumlah Halaman: </td>
                        <td>{{$data->jumlah_hal}}</td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">Berat: </td>
                        <td>{{$data->berat}}</td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">ISBN: </td>
                        <td>{{$data->isbn}}</td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">Deskripsi: </td>
                        <td>{{$data->deskripsi}}</td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">Penulis: </td>
                        <td>{{$data->penulis->nama}}</td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">Penerbit: </td>
                        <td>{{$data->penerbit->nama}}</td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">Kategori: </td>
                        <td>
                            <a href="{{url('/kategori-buku/'.$data->kategori->id)}}">{{$data->kategori->nama_kategori}}</a>
                        </td>
                    </tr>
                    {{-- <tr>
                        <td class="text-nowrap">Librarian: </td>
                        <td>
                            <a href=""></a>
                        </td>
                    </tr> --}}
               </table>
               <div class="text-center">
                   @if ($data->link_beli)
                   <a href="{{$data->link_beli}}" target="_blank" class="btn btn-primary">Lihat Harga</a>       
                   @else
                   <a href="#" target="_blank" class="btn btn-primary disabled">Lihat Harga</a>
                   @endif
                   <a href="{{url('/buku-update/'.$data->id)}}" class="btn btn-warning text-white">Edit Buku</a>
                   <form action="{{url('/buku-hapus/'.$data->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-4 text-white">Hapus Buku</button>
                   </form>
               </div>
               
           </div>
           
        </div>
    </div>

        
@endsection