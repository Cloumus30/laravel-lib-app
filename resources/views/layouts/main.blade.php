<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <script src="{{url('js/bootstrap.bundle.js')}}"></script>
    @yield('head')
    <title>Library | @yield('title')</title>
    <style>
      html{
        overflow: auto;
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Perpus Cloudy</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              {{-- <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Dashboard</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{url('/kategori-buku')}}">Daftar Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/buku')}}">List Buku</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link" href="{{url('/buku-tambah')}}">Tambah Buku</a>
              </li>    
              @endauth
              <li class="nav-item">
                <a class="nav-link" href="#">Tentang Kami</a>
              </li>
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{url('/login')}}">Login</a>
              </li>    
              @endguest
            @auth
            <li class="nav-item dropdown d-flex">
              <img src="{{url('img/github.png')}}" alt="" class="rounded-circle" width="50px" height="50px">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{auth()->user()->username}} 
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{url('/logout')}}">Logout</a></li>
              </ul>
            </li>   

            <li class="nav-item dropdown d-flex me-4">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Admin Menu
              </a>
              <ul class="dropdown-menu me-5 overflow-hidden" aria-labelledby="navbarDropdown">
                {{-- menu Buku --}}
                <li><h6 class="dropdown-header">Menu Buku</h6></li>
                <li><a class="dropdown-item" href="{{url('/buku-tambah')}}">Tambah Buku</a></li>
                <li><a class="dropdown-item" href="{{url('/buku-tambah')}}">List Buku</a></li>
                <li><hr class="dropdown-divider"></li>
                {{-- Menu Kategori --}}
                <li><h6 class="dropdown-header">Menu Kategori</h6></li>
                <li><a class="dropdown-item" href="{{url('/kategori-buku-tambah')}}">Tambah Kategori</a></li>
                <li><hr class="dropdown-divider"></li>
                {{-- Menu Penulis --}}
                <li><h6 class="dropdown-header">Menu Penulis</h6></li>
                <li><a class="dropdown-item" href="{{url('/login')}}">Tambah Penulis</a></li>
                <li><hr class="dropdown-divider"></li>
                {{-- Menu Penerbit --}}
                <li><h6 class="dropdown-header">Menu Penerbit</h6></li>
                <li><a class="dropdown-item" href="{{url('/penerbit')}}">List Penerbit</a></li>
                <li><a class="dropdown-item" href="{{url('/tambah-penerbit')}}">Tambah Penerbit</a></li>
                <li><hr class="dropdown-divider"></li>
                {{-- Logout --}}
                <li><a class="dropdown-item text-danger" href="{{url('/logout')}}">Logout</a></li>
              </ul>
            </li>   
            @endauth
             
            
            </ul>
          </div>
        </div>
      </nav>

    @yield('body')

    <div class="container my-5">
      <h1 class="text-center">CONTACT</h1>
      <div class="d-flex flex-wrap py-5 justify-content-between ms-5 ms-lg-0">
          <a href="https://wa.me/6281369622964" data-bs-toggle="tooltip" class=" mx-5 my-4 mx-lg-0 my-lg-0" title="62813-6962-2964">
              <img src="{{url('img/wa.png')}}" alt="" style="width: 130px;">
          </a>

          <a href="mailto: danapradana30@gmail.com" data-bs-toggle="tooltip" class="mx-5 my-4 mx-lg-0 my-lg-0" title="danapradana30@gmail.com">
              <img src="{{url('img/email.png')}}" alt="" style="width: 130px;">
          </a>

          <a href="https://www.linkedin.com/in/cloudias-imani-pradana-971b05204/" data-bs-toggle="tooltip" class="mx-5 my-4 mx-lg-0 my-lg-0" title="linkedin.com/in/cloudias-imani-pradana-971b05204/">
              <img src="{{url('img/linkedin.png')}}" alt="" style="width: 130px;">
          </a>

          <a href="https://www.instagram.com/cloudiasimani/" data-bs-toggle="tooltip" class="mx-5 my-4 mx-lg-0 my-lg-0" title="@cloudiasimani">
              <img src="{{url('img/instagram.png')}}" alt="" style="width: 130px;">
          </a>

          <a href="https://github.com/Cloumus30" data-bs-toggle="tooltip" class="mx-5 my-4 mx-lg-0 my-lg-0" title="Cloumus30">
              <img src="{{url('img/github2.png')}}" alt="" style="width: 130px;">
          </a>

      </div>
  </div>



  <footer class="mt-5 text-center">
      <p>@Cloudias</p>
  </footer>

    @yield('script')
</body>
</html>