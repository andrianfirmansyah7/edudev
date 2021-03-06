<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduDev</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
      <header style="padding: 3%; background-color: rgb(9, 48, 133); color: white;">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a id="navedu" class="navbar-brand" href="index.html" style="font-size: 40px;"><b>EduDev</b></a>
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
     <div class="card-content">
        <div class="image-content">
            <img src="img/laptop.png" alt="ini gambar">
        </div>
        <div class="text-content">
            <h1 style="color: rgb(9, 48, 133);"><b>Coding dengan Asik dan Menyenangkan</b></h1>
            <p style="color: rgb(9, 48, 133);">Platform yang menyediakan kursus online pilihan terbaik bagi Anda yang ingin mulai belajar membangun aplikasi sendiri berupa Web Apps ataupun Mobile Apps.</p>
            <a href="register.html" class="btn btn-outline-success" target="_blank">Daftar Sekarang</a>
        </div>
    </div>
    <div id="content">
        <h2 style="color: rgb(9, 48, 133);"><b>Mengapa Bergabung dengan EduDev?</b></h2>
    </div>
    <div class="card-content">
        <div class="image-content">
            <img src="img/gambar1.png" alt="ini gambar" style="width: 130%;">
        </div>
        <div class="text">
            <div>
              <p style="color: rgb(9, 48, 133); width: 100%;"><img src="img/1alasan.png" alt=""> Materi mudah dipahami </p>
              
            </div>
            <div>
              <p style="color: rgb(9, 48, 133); width: 100%;"><img src="img/2alasan.png" alt=""> Mendapatkan Sertifikat </p>
              
            </div>
            <div>
              <p style="color: rgb(9, 48, 133); width: 100%;"><img src="img/3alasan.png" alt=""> Mengembangkan Hardskill dalam bidang pemrograman</p>
              
            </div>
        </div>
    </div>
    <div id="content">
        <h2 style="color: rgb(9, 48, 133);"><b>Belajar Apa Saja?</b></h2>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="row m-3">
                <img src="img/html.png" class="rounded float-start mr-3" alt="...">
                <img src="img/css.png" class="rounded float mr-3" alt="...">
                <img src="img/js.png" class="rounded float-end ml-4" alt="...">
            </div>
            <div class="row m-3">
                <img src="img/py.png" class="rounded float-start" alt="...">
                <img src="img/java.png" class="rounded float" alt="...">
                <img src="img/sql.png" class="rounded float-end" alt="...">
            </div>
        </div>
        
    </div>
    <div id="content">
        <h2 style="color: rgb(9, 48, 133);"><b>Apa Kata Mereka?</b></h2>
    </div>
    <div class="d-flex justify-content-center">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/katamereka1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/katamereka2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/katamereka3.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <footer>
        <p>Ikuti Kami</p><br>
        <a href="https://www.instagram.com/muhamadivanf_/" target="_blank">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
        </a>
        <a href="https://www.instagram.com/muhamadivanf_/" target="_blank">
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="https://www.facebook.com/muhamad.ivan.31542/" target="_blank">
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="https://www.facebook.com/muhamad.ivan.31542/" target="_blank">
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <!-- <a href="https://github.com/muhamadivan1" target="_blank">
            <i class="fa fa-github" aria-hidden="true"></i>
        </a><br> -->
        <br><br><p>?? 2021 ??? EduDev ??? All rights reserved</p>
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