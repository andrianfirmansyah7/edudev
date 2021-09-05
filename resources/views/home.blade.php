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
    <div class="card-content">
        <div class="image-content">
            <img src="img/laptop.png" alt="ini gambar">
        </div>
        <div class="text-content">
            <h1><b>Coding dengan Asik dan Menyenangkan</b></h1>
            <p>Platform yang menyediakan kursus online pilihan terbaik bagi Anda yang ingin mulai belajar membangun aplikasi sendiri berupa Web Apps ataupun Mobile Apps.</p>
            <a href="register.html" class="btn btn-outline-success" target="_blank">Daftar Sekarang</a>
        </div>
    </div>
    <div id="content">
        <h2>Mengapa Bergabung dengan EduDev?</h2>
    </div>
    <div class="d-flex justify-content-center">
        <img src="img/alasan1.png" class="rounded float-md-start" alt="...">
        <img src="img/alasan2.png" class="rounded float-md-none" alt="...">
        <img src="img/alasan3.png" class="rounded float-md-end" alt="...">
    </div>
    <!-- <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="img/alasan1.png" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/alasan2.png" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/alasan3.png" class="card-img-top" alt="...">
          </div>
        </div>
    </div> -->
    <!-- <div class="row">
        <div class="col-sm-12">
            <div class="card-group">
              <div class="card">
                <img src="img/buku.png" class="card-img-top" alt="gambar">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                      This card has supporting text below as a natural lead-in to additional content.
                  </p>
                </div>
                <div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div>
              </div>
              <div class="card">
                <img src="img/sertif.png" class="card-img-top" alt="gambar">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                      This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.
                  </p>
                </div>
                <div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div>
              </div>
              <div class="card">
                <img src="img/lampu.png" class="card-img-top" alt="gambar">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                      This card has supporting text below as a natural lead-in to additional content.
                  </p>
                </div>
                <div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div>
              </div>
        </div>
    </div> -->
    <!-- <div class="row mt-3">
        <div class="card" style="width: 18rem;">
            <img src="img/buku.png" class="card-img-top" alt="ini gambar">
            <div class="card-body">
              <h5 class="card-title">Materi Mudah dipahami dan sehingga belajar menjadi menyenangkan</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="img/sertif.png" class="card-img-top" alt="ini gambar">
            <div class="card-body">
              <h5 class="card-title">Mendapatkan sertifikat</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="img/lampu.png" class="card-img-top" alt="ini gambar">
            <div class="card-body">
              <h5 class="card-title">Mengembangkan hard skill dalam bidang pemrograman</h5>
            </div>
        </div>
    </div> -->
    <div id="content">
        <h2>Belajar Apa Saja?</h2>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="row m-3">
                <img src="img/html.png" class="rounded float-start mr-3" alt="...">
                <img src="img/css.png" class="rounded float mr-3" alt="...">
                <img src="img/js.png" class="rounded float-end" alt="...">
            </div>
            <div class="row m-3">
                <img src="img/py.png" class="rounded float-start" alt="...">
                <img src="img/java.png" class="rounded float" alt="...">
                <img src="img/sql.png" class="rounded float-end" alt="...">
            </div>
        </div>
        
    </div>
    <!-- <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="img/html.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/css.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a short card.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/js.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/py.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card h-100">
              <img src="img/java.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a short card.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="img/sql.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="card-content">
        <div class="image-content">
            <img src="images/cssjpeg.jpg" alt="ini gambar">
        </div>
        <div class="text-content">
            <h3>Kelas CSS Dasar</h3>
            <p>Website yang baik akan memberikan kesan User-Experince yang hebat untuk pengguna. Jika pengguna yang menggunakan website kita sudah nyaman maka akan memberikan keuntungan yang besar bagi kita. Membuat suatu website juga tidak bisa sembarangan tanpa didasari dari visi dan misi yang jelas. Dengan menggunakan Cascade Style Sheet kini kita dapat mempercantik website kita agar lebih eye-catching. Tujuan utamanya adalah agar pengguna kita lebih nyaman lagi ketika menggunakan website kita. Warna dan jenis tipografi akan menentukan masing-masing dari tujuan website tersebut dibuat. Sebagai web designer maka kita wajib mempelajari CSS dalam tujuan mempercantik website dan memberikan efek animasi agar lebih terlihat interactive di mata pengguna.</p>
            <a href="https://www.buildwithangga.com/kelas/css-website-design" class="btn btn-primary-dark w-50" target="_blank">Lihat Kelas</a>
        </div>
    </div>
    <div class="card-content">
        <div class="image-content">
            <img src="images/reactjspng.png" alt="ini gambar">
        </div>
        <div class="text-content">
            <h3>Kelas React Javascript</h3>
            <p>React JS adalah library JavaScript yang digunakan oleh web developer dalam membangun website yang lebih interactive, fast, dan responsive. Library ini sering digunakan untuk membuat Single Page Application (SPA). Di kelas gratis ini kita akan membangun toko online sederhana dengan menggunakan HTML, CSS, JavaScript (React JS). Tentunya kita akan mempelajari dasar dari penggunaan library ini pada website kita seperti Components, Props, Events, Conditional, dan masih banyak lainnya.</p>
            <a href="https://www.buildwithangga.com/kelas/react-javascript" class="btn btn-primary-dark w-50" target="_blank">Lihat Kelas</a>
        </div>
    </div>
    <div class="card-content">
        <div class="image-content">
            <img src="images/ssBWAFWD.png" alt="ini gambar">
        </div>
        <div class="text-content">
            <h3>Kelas Full-Stack Web Developer</h3>
            <p>Di kelas Full-Stack Web Developer kita akan mempelajari UX design, UI design, Website Development dengan Bootstrap dan Laravel Jika saat ini kamu sedang bingung untuk fokus kepada karir apa maka kelas ini cocok sekali karena kamu akan mempelajari banyak bidang.</p>
            <a href="https://www.buildwithangga.com/kelas/full-stack-web-developer" class="btn btn-primary-dark w-50" target="_blank">Lihat Kelas</a>
        </div>
    </div>
    <div class="card-content">
        <div class="image-content">
            <img src="images/ssBWAFAD.png" alt="ini gambar">
        </div>
        <div class="text-content">
            <h3>Kelas Full-Stack Android Developer</h3>
            <p>Kelas ini akan membawa kalian untuk mempelajari materi terkait UX design dan juga Android development dalam membangun suatu aplikasi Android pemesenan tiket nonton secara online (seperti aplikasi TIX ID atau CGV). Saat ini banyak sekali perusahaan IT yang membutuhkan seorang Android developer untuk membangun aplikasi mereka. Tapi bukan hanya itu saja, tanpa adanya UX designer maka aplikasi yang akan dibangun dikhawatirkan tidak memiliki design-experience yang baik.</p>
            <a href="https://www.buildwithangga.com/kelas/full-stack-android-developer" class="btn btn-primary-dark w-50" target="_blank">Lihat Kelas</a>
        </div>
    </div> -->
    <div id="content">
        <h2>Apa Kata Mereka?</h2>
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
                <img src="img/katamereka2.png" class="d-block w-100" alt="...">
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