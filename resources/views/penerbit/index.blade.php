@extends('layouts.main')

@section('head')

@endsection

@section('title')
    List Penerbit Buku
@endsection

@section('body')
        <h1 class="text-center my-5">List Semua Penerbit</h1>
        <div class="container-fluid my-5">
           <table class="table table-striped">
               <tr>
                   <th>Id</th>
                   <th>Nama Penerbit</th>
                   <th>Email</th>
                   <th>Telepon</th>
                   <th>Alamat</th>
                   @auth
                   <th>Kontrol</th>    
                   @endauth
                   
               </tr>
               @foreach ($data as $item)
               <tr>
                   <td>{{$item->id}}</td>
                   <td>
                       <a class="text-nowrap" href="{{url('/penerbit/'.$item->id)}}">{{$item->nama}}</a> 
                    </td>
                   <td class="text-nowrap">{{$item->email}}</td>
                   <td class="text-nowrap">{{$item->telepon}}</td>
                   <td>{{$item->alamat}}</td>
                   @auth
                   <td>
                    <a href="{{url('/update-penerbit/'.$item->id)}}" class="btn btn-warning text-white">Edit</a>
                </td>    
                   @endauth
                   
               </tr>
               @endforeach
           </table>
        </div>

        
@endsection