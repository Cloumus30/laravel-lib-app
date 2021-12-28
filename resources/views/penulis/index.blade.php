@extends('layouts.main')

@section('head')

@endsection

@section('title')
    List Penulis Buku
@endsection

@section('body')
        <h1 class="text-center my-5">List Semua Penulis</h1>
        <div class="container-fluid my-5">
           <table class="table table-striped">
               <tr>
                   <th>Nama Penulis</th>
                   <th>Tanggal Lahir</th>
                   <th>Foto</th>
                   @auth
                   <th>Aksi</th>    
                   @endauth
                   
               </tr>
               @foreach ($data as $item)
               <tr>
                   <td>
                       <a class="text-nowrap" href="{{url('/penulis/'.$item->id)}}">{{$item->nama}}</a> 
                    </td>
                    @php
                        $date = \Carbon\Carbon::create($item->tgl_lahir);
                    @endphp
                   <td class="text-nowrap">{{ $date->format('j F Y')}}</td>
                   <td>
                       <img src="{{$item->link_foto}}" alt="{{$item->nama_foto}}" width="150px">
                   </td>
                   @auth
                   <td>
                        <a href="{{url('/update-penulis/'.$item->id)}}" class="btn btn-warning text-white">Edit</a>
                    </td>    
                   @endauth
                   
               </tr>
               @endforeach
           </table>
        </div>

        
@endsection