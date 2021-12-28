@extends('layouts.main')

@section('head')

@endsection

@section('title')
    {{$data->nama}}
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
                       <td class="text-nowrap">Nama Penulis </td>
                        <td>{{$data->nama}}</td>
                   </tr>
                   
                    <tr>
                    @php
                        $date = \Carbon\Carbon::create($data->tgl_lahir)->format('d F Y');
                    @endphp
                        <td class="text-nowrap">Tanggal Lahir </td>
                        <td>{{$date}}</td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">Biografi </td>
                        <td>{{$data->biografi}}</td>
                    </tr>
                   
                    <tr>
                        <td class="text-nowrap">List Buku: </td>
                        <td>
                            <ul>
                                <div class="row">
                                    @foreach ($data->buku as $item)
                                    <div class="col-6">
                                        <li>
                                            <a href="{{url('/buku/'.$item->id)}}">
                                                {{$item->nama}}
                                            </a>
                                        </li>
                                    </div>
                                    @endforeach
                                </div>
                            </ul>
                        </td>
                    </tr>
               </table>
               
           </div>
           
        </div>
    </div>

        
@endsection