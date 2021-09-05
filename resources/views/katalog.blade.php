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
 <div id="content">
    <h2 style="color: rgb(9, 48, 133);"><b>Katalog Materi</b></h2>
    </div>
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card" style="width: 80%;">
            <img src="img/materiHTML.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title-catalog"><b>HTML</b></h5>
              <p class="card-text">Bahasa digunakan untuk membuat kerangka tampilan setiap situs web</p>
              <a href="kelashtml.html" class="btn btn-success btn-block">Akses Materi</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 80%;">
            <img src="img/materiCSS.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title-catalog"><b>CSS</b></h5>
              <p class="card-text">Bahasa digunakan untuk mempercantik tampilan website agar menarik</p>
              <a href="kelascss.html" class="btn btn-success btn-block">Akses Materi</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 80%;">
            <img src="img/materiJS.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title-catalog"><b>JavaScript</b></h5>
              <p class="card-text">Bahasa digunakan untuk mengatur website agar lebih interaktif</p>
              <a href="kelasjs.html" class="btn btn-success btn-block">Akses Materi</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 80%;">
            <img src="img/py.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title-catalog">Python</h5>
              <p class="card-text">Bahasa paling mudah dan digunakan dalam pengembangan data</p>
              <a href="#" class="btn btn-danger btn-block">Masih Dalam Tahap Proses</a>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card"  style="width: 80%;">
              <img src="img/sql.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title-catalog">MySql</h5>
                <p class="card-text">Bahasa yang digunakan untuk database </p>
                <a href="#" class="btn btn-danger btn-block">Masih Dalam Tahap Proses</a>
              </div>
            </div>
        </div>
        <div class="col">
            <div class="card"  style="width: 80%;">
              <img src="img/java.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title-catalog">Java</h5>
                <p class="card-text">Bahasa yang digunakan untuk membuat aplikasi Mobile</p>
                <a href="#" class="btn btn-danger btn-block">Masih Dalam Tahap Proses</a>
              </div>
            </div>
        </div>
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