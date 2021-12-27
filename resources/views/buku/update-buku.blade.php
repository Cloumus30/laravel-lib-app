@extends('layouts.main')

@section('head')

@endsection

@section('title')
    Update Buku
@endsection

@section('body')
        <div class="container mb-5">
            <h1 class="my-5 text-center">Update Buku</h1>
            <form action="{{url('/buku-update/'.$buku->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 mb-4">
                        <label for="nama" class="form-label">Judul Buku </label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{$buku->nama}}">
                    </div>
                    <div class="col-lg-4 col-sm-12 mb-lg-4">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="text" name="tahun" id="tahun" class="form-control" value="{{$buku->tahun}}">
                    </div>
                    <div class="col-lg-4 col-sm-12 mb-lg-4">
                        <label for="jumlah_hal" class="form-label">Jumlah Halaman</label>
                        <input type="number" name="jumlah_hal" id="jumlah_hal" class="form-control" value="{{$buku->jumlah_hal}}">
                    </div>
                    <div class="col-lg-4 col-sm-12 mb-lg-4">
                        <label for="berat" class="form-label">Berat</label>
                        <input type="text" name="berat" id="berat" class="form-control" value="{{$buku->berat}}">
                    </div>
                    <div class="col-12 mb-4">
                    
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" name="isbn" id="isbn" class="form-control" value="{{$buku->isbn}}">
                    
                    </div>
                    <div class="col-12 mb-4">
                        
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="10">{{$buku->deskripsi}}</textarea>
                        
                    </div>
                    <div class="col-lg-8 col-sm-12 mb-lg-4">
                        <label for="penulis_id" class="form-label">Penulis</label>
                        <select class="form-select" name="penulis_id" required>
                            @foreach ($penulis as $item)
                                @if ($buku->penulis->id==$item->id)
                                <option value="{{$item->id}}" selected>{{$item->nama}}</option>    
                                @else
                                <option value="{{$item->id}}">{{$item->nama}}</option>    
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 col-sm-12 mb-lg-4">
                        <label for="kategori_id" class="form-label">Kategori Buku</label>
                        <select class="form-select" name="kategori_id" required>
                            @foreach ($kategori as $item)
                            @if ($buku->kategori->id==$item->id)
                                <option value="{{$item->id}}" selected>{{$item->nama_kategori}}</option>    
                                @else
                                <option value="{{$item->id}}">{{$item->nama_kategori}}</option>    
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 mb-4">
                        <label for="penerbit_id" class="form-label">Penerbit</label>
                        <select class="form-select" name="penerbit_id" required>
                            <option selected>Pilih Penerbit Buku</option>
                            @foreach ($penerbit as $item)
                            @if ($buku->penerbit->id==$item->id)
                                <option value="{{$item->id}}" selected>{{$item->nama}}</option>    
                                @else
                                <option value="{{$item->id}}">{{$item->nama}}</option>    
                                @endif                                
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-6 col-sm-12 mb-4">
                        <label for="foto" class="form-label">Gambar Buku</label>
                        <input class="form-control" type="file" id="foto" name="foto">
                    </div>

                    <div class="col-lg-6 col-sm-12 mb-4 text-center">
                        @if ($buku->link_foto)
                        <img src="{{$buku->link_foto}}" alt="{{$buku->nama_foto}}">
                        @else
                        <h3>Belum Ada Gambar</h3>
                        @endif
        
                    </div>

                    <div class="col-12 mb-4">
                    
                        <label for="link_beli" class="form-label">Link Beli</label>
                        <input type="text" name="link_beli" id="link_beli" class="form-control" value="{{$buku->link_beli}}">
                    
                    </div>

                </div>     
                
                <button class="btn btn-primary" type="submit">Update Buku</button>
            </form>
        </div>

        
@endsection