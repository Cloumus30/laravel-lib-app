@extends('layouts.main')

@section('head')
    <style>
        body{
            background-color:#e9ecef;
        }
        .section-2{
            box-shadow: 10px 10px 20px #b7b8b9;
        }
    </style>
@endsection

@section('title')
    Welcome
@endsection

@section('body')
    <div class="container">
        <h2 class="text-center my-5">Selamat Datang di Perpustakaan</h2>
        <div class="row my-5">
            <div class="col-lg-3 col-md-12 mt-5">
                <div class="card mx-sm-auto mx-md-0" style="width: 15rem;">
                    <img src="{{url('img/github.png')}}" class="card-img-top align-self-center" alt="gambar buku" style="width: 10rem">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Penulis: </h6>
                      <a href="#" class="btn btn-success">Lihat Buku</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 mt-5">
                <div class="card mx-sm-auto mx-md-0" style="width: 15rem;">
                    <img src="{{url('img/github.png')}}" class="card-img-top align-self-center " alt="gambar buku" style="width: 10rem">
                    <div class="card-body text-start">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Penulis: </h6>
                      <a href="#" class="btn btn-success">Lihat Buku</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 mt-5">
                <div class="card mx-sm-auto mx-md-0" style="width: 15rem;">
                    <img src="{{url('img/github.png')}}" class="card-img-top align-self-center" alt="gambar buku" style="width: 10rem">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Penulis: </h6>
                      <a href="#" class="btn btn-success">Lihat Buku</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 mt-5">
                <div class="card mx-sm-auto mx-md-0" style="width: 15rem;">
                    <img src="{{url('img/github.png')}}" class="card-img-top align-self-center" alt="gambar buku" style="width: 10rem">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Penulis: </h6>
                      <a href="#" class="btn btn-success">Lihat Buku</a>
                    </div>
                </div>
            </div>
            
            <div class="col-12 my-5 text-center">
                <a href="" class="btn btn-primary">Lihat Buku Selengkapnya</a>
            </div>
        </div>

        <div class="row my-5 section-2" style="background-color: #fff;">
            <div class="col-12 mt-5">
                <h3>Koleksi Buku Lengkap</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique aliquid nam labore dolor repellat sapiente quisquam distinctio, dicta quas optio quam impedit ut laboriosam pariatur et repudiandae. Corrupti nesciunt veniam repudiandae recusandae atque culpa earum consectetur vel, quam incidunt possimus beatae sit quisquam debitis. Recusandae accusantium nostrum libero laboriosam earum dolorum et aliquid beatae modi ratione eligendi pariatur commodi sapiente reprehenderit, impedit iusto fugiat rerum nesciunt unde eius. Veritatis explicabo ut quo ab error voluptate laudantium aliquid non nihil odio ex suscipit dicta vitae reprehenderit magnam ad, quae laboriosam! Fuga voluptate at optio ex voluptatum corrupti aliquam reiciendis, nostrum iure?</p>
            </div>
            <div class="col-12 mt-5 text-end">
                <h3>Banyak Hal Lainnya...</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique aliquid nam labore dolor repellat sapiente quisquam distinctio, dicta quas optio quam impedit ut laboriosam pariatur et repudiandae. Corrupti nesciunt veniam repudiandae recusandae atque culpa earum consectetur vel, quam incidunt possimus beatae sit quisquam debitis. Recusandae accusantium nostrum libero laboriosam earum dolorum et aliquid beatae modi ratione eligendi pariatur commodi sapiente reprehenderit, impedit iusto fugiat rerum nesciunt unde eius. Veritatis explicabo ut quo ab error voluptate laudantium aliquid non nihil odio ex suscipit dicta vitae reprehenderit magnam ad, quae laboriosam! Fuga voluptate at optio ex voluptatum corrupti aliquam reiciendis, nostrum iure?</p>
            </div>
        </div>

    </div>
@endsection