<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('tampilan/assets/css/mycss.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('tampilan/assets/css/footer.css')}}">

    <title>Sans Project</title>
  </head>
  <body class="clearfix">
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">Sans</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active" href="index.html">Beranda<span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="tentang.html">Tentang</a>
              <a class="nav-item nav-link" href="layanan.html">Layanan</a>
              <a class="nav-item nav-link" href="#">Gallery</a>
              <a class="nav-item nav-link" href="kontak.html">Kontak</a>
              <a class="nav-item btn btn-primary tombol" href="#">Berlangganan</a>
            </div>
        </div>
     </div>
    </nav>
    <!-- akhir navbar -->

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Dapatkan Produk dengan <span>Kualitas Tinggi</span> dan <span>Layanan Terbaik</span></h1>
      </div>
    </div>
    <!-- akhir jumbotron -->

    <!-- kami lakukan -->
    <section class="do">
      <div class="container">
        
      </div>
    </section>
    <!-- akhir kami lakukan -->

    <!-- layanan -->
    <section class="layanan">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">Layanan Kami</h1>
          </div>
        </div>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-sm-5">
                    <img class="d-block w-100" src="{{asset('tampilan/assets/img/web.png')}}">
                  </div>
                  <div class="col-sm-7">
                    @foreach ($data_kategori as $kategori)
                    <h2>{{$kategori -> nama_produk}}</h2>
                    <p>Web Design pada sebuah website mungkin sudah menjadi daya tarik pada setiap tampilan interface pada'tampilan, disini kami menawarkan jasa pembuatan website yang sesuai dengan permintaan.</p>
                    <a href="pesan.html" class="btn btn-primary yess">Pesan</a>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-sm-5">
                    <img class="d-block w-100" src="{{asset('tampilan/assets/img/android.png')}}">
                  </div>
                  <div class="col-sm-7">
                    <h2>Android Development</h2>
                    <p>Android pada umumnya adalah sebuah software yang sudah banyak terdapat pada Smartphone sekarang, disini kami menawarkan pembuatan Mobile Android App sesuai dengan permintaan.</p>
                    <a href="pesan.html" class="btn btn-primary yess">Pesan</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-sm-5">
                    <img class="d-block w-100" src="{{asset('tampilan/assets/img/back.png')}}">
                  </div>
                  <div class="col-sm-7">
                    <h2>Web Development</h2>
                    <p>Source code dibuat dengan sangat teliti memperhatikan setiap instruksi yang dibuat dengan logika yang tersusun rapih Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <a href="pesan.html" class="btn btn-primary yess">Pesan</a>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

      </div>
    </section>
    <!-- akhir layanan -->


    <!-- apa yang kami lakukan -->
    <section class="tujuan" id="tujuan">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">Apa Yang Kami Lakukan</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir apa yang kami lakukan -->


    <!-- portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 text-center">
            <div class="card" style="">
              <img class="card-img-top" src="{{asset('tampilan/assets/fullimg/g1.jpg')}}" alt="Card image cap">
              <div class="card-body">
                  <p class="card-text">gambar1</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="card" style="">
              <img class="card-img-top" src="{{asset('tampilan/assets/fullimg/g3.jpg')}}" alt="Card image cap">
              <div class="card-body">
                  <p class="card-text">gambar2</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="card" style="">
              <img class="card-img-top" src="{{asset('tampilan/assets/fullimg/g4.jpg')}}" alt="Card image cap">
              <div class="card-body">
                  <p class="card-text">gambar3</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="card" style="">
              <img class="card-img-top" src="{{asset('tampilan/assets/fullimg/g5.jpg')}}" alt="Card image cap">
              <div class="card-body">
                  <p class="card-text">gambar4</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12 text-center">
            <button type="button" class="btn btn-primary btn-lg">Lihat Semua Foto</button>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir portfolio -->


    <!-- footer -->
      <section class="footer">
        <div class="card text-white bg-dark mb-3">
          <div class="container">
            <div class="card-header">
              <div class="row">
                <div class="col-sm-5">
                  <h5>Tentang PT.Sans</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <img src="{{asset('tampilan/assets/img/fb.png')}}">
                  <img src="{{asset('tampilan/assets/img/twitter.png')}}">
                  <img src="{{asset('tampilan/assets/img/ig.png')}}">
                </div>
                <div class="col-sm-1">
                  <h5>Index</h5>
                  <p>Produk</p>
                  <p>Tujuan</p>
                  <p>Portfolio</p>
                </div>
                <div class="col-sm-3">
                  <h5>Kontak</h5>
                    <div class="k1">
                      <img src="{{asset('tampilan/assets/img/telepon.png')}}">
                      <span>(022) 922 214 000</span>
                    </div>
                    <br>
                    <div class="k2">
                      <img src="{{asset('tampilan/assets/img/hp.png')}}" class="g2">
                      <span>+62 895 6272 0892</span>
                    </div>
                    <br>
                    <div class="k3">
                      <img src="{{asset('tampilan/assets/img/wa.png')}}">
                      <span>+62 895 6272 0892</span>
                    </div>
                    <br>
                    <div class="k4">
                      <img src="{{asset('tampilan/assets/img/psn.png')}}">
                      <span>+62 895 6272 0892</span>
                    </div>
                    <br>
                    <div class="k5">
                      <img src="{{asset('tampilan/assets/img/email.png')}}">
                      <span>ptsans@gmail.com</span>
                    </div>
                </div>
                <div class="col-sm-3">
                  <h5>Kantor</h5>
                  <img src="{{asset('tampilan/assets/img/house.png')}}">
                  <span>Main Office</span>
                  <p>Jl.Babakan Tarogong no.76 Pasirkoja Komplek Asrama gg.soma <br> Bandung 40232, Jawa Barat</p>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12 text-center">
                  <p>&copy Copyright 2019 by PT.SANS</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- akhir footer -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>