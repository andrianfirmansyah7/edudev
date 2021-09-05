<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduDev</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body id="kontenreg">
    <header style="padding: 3%; background-color: rgb(9, 48, 133); color: white;">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a id="navedu" class="navbar-brand" href="#"><b>EduDev</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end nav-pills" id="navbarNavAltMarkup">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('katalog') }}">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentang') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-success" aria-current="page" href="{{ route('login') }}">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-outline-success" aria-current="page" href="{{ route('register') }}">Daftar</a>    
                    </li>
                </div>
            </div>
        </nav>
    </header>
    <!-- <div id="content">
        <h2>Katalog Kelas</h2>
        <p class="content-description">Berikut adalah Kelas yang tersedia</p>
    </div> -->

    <!-- login -->
    <div class="auth">
        <div class="container">
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-7 col-lg-5">
                    <div class="card" style="box-shadow: -8px 12px 18px 0 rgb(25, 42, 70, 0.13); border-radius: 2px;">
                        <div class="card-body">
                            <h4 class="text-center" style="color: rgb(9, 48, 133);"><b>Selamat Datang EduDevers!</b></h4>
                            <p class="mb-5 text-center" style="color: rgb(9, 48, 133);">Mari belajar bersama</p>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                @if(session('errors'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Something it's wrong:
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                                <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                                </div>
                                @endif
                                @if (Session::has('success'))
                                <div class="alert alert-success">
                                {{ Session::get('success') }}
                                </div>
                                @endif
                                @if (Session::has('error'))
                                <div class="alert alert-danger">
                                {{ Session::get('error') }}
                                </div>
                                @endif
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label" style="color: rgb(9, 48, 133);">Alamat Email</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label" style="color: rgb(9, 48, 133);">Password</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1"  name="password">
                                </div>
                                <div class="row">
                                    <div class="col-6 text-left">   
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="remember">
                                            <label class="form-check-label ml-2" for="remember" style="color: grey; font-size: small;">Ingat Saya</label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="forgot.html" target="__blank" style="color: grey; font-size: small;">Lupa Password?</a>
                                    </div>
                                </div>
                                <div class="form-group my-4">
                                    <button type="submit" class="btn btn-primary form-control">Masuk</button>                         </div>
                                <p class="text-center" style="color: grey; font-size: small;">Belum menjadi Anggota? <a href="{{ route('register') }}" style="color: black; font-size: small;"><b>Daftar</b></a></p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="card d-flex justify-content-centerx" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Login</h5>
          <form>
            <div id="card-title">
                <p><b>Selamat Datang EduDevers!</b></p><br>
                <p>Mari Belajar Bersama</p>
            </div>
            <div class="mb-3" id="judul-input">
              <label for="exampleInputPassword1" class="form-label">Alamat Email</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3" id="judul-input">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
            <br><p>Belum menjadi anggota? <a href="register.html"><b>Daftar</b></a></p>
        </form>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
    </div> -->

    <!-- <div id="formulir2">
        <form>
            <div id="card-title">
                <p><b>Selamat Datang EduDevers!</b></p><br>
                <p>Mari Belajar Bersama</p>
            </div>
            <div class="mb-3" id="judul-input">
              <label for="exampleInputPassword1" class="form-label">Alamat Email</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3" id="judul-input">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
            <br><p>Belum menjadi anggota? <a href="register.html"><b>Daftar</b></a></p>
        </form>    
    </div> -->
    <footer>
        <p>Ikuti Kami</p><br>
        <a href="https://www.instagram.com/muhamadivanf_/" target="_blank">
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="https://www.facebook.com/muhamad.ivan.31542/" target="_blank">
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="https://www.facebook.com/muhamad.ivan.31542/" target="_blank">
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="https://github.com/muhamadivan1" target="_blank">
            <i class="fa fa-github" aria-hidden="true"></i>
        </a><br>
        <br><br><p>© 2021 • EduDev • All rights reserved</p>
    </footer>
    <!-- <button class="theme-button" onclick="darkModeHandler(this)">Dark Mode</button> -->
    <!-- <script>
        let darkModeStatus = false;

        darkModeHandler = (element) => {
            const body = document.body;
            const header = document.getElementsByTagName('header')[0];
            const footer = document.getElementsByTagName('footer')[0];
            
            header.classList.toggle('dark-theme');
            body.classList.toggle('dark-theme');
            footer.classList.toggle('dark-theme');
            darkModeStatus = !darkModeStatus
            element.innerHTML = 'Light Mode';
            if(darkModeStatus){
                element.innerHTML = 'Light Mode';
            } else{
                element.innerHTML = 'Dark Mode';
            }
        }
    </script> -->
</body>
</html>