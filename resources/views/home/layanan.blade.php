<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('tampilan/assets/css/layanan.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('tampilan/assets/css/footer.css')}}">

    <title>Layanan</title>
  </head>
  <body>
    


    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">Sans</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="/">Beranda<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="tentang.html">Tentang</a>
            <a class="nav-item nav-link" href="layanan.html">Layanan</a>
            <!-- <a class="nav-item nav-link" href="#">Gallery</a> -->
            <!-- <a class="nav-item nav-link" href="kontak.html">Kontak</a> -->
            <a class="nav-item btn btn-primary tombol" href="#">Berlangganan</a>
          </div>
        </div>
     </div>
    </nav>
    <!-- akhir navbar -->


    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
    </div>
    <!-- akhir jumbotron -->


    <!-- layanan -->
    <section class="produk" id="produk">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h1 class="text-center">Layanan Kami</h1>
              <hr>
            </div>

              <div class="row ok">
                <div class="col-sm-4 text-center">
                  <img src="{{asset('tampilan/assets/img/web.png')}}" class="icon1">
                  <h4>Web Design</h4>
                  <p>Web Design pada sebuah website mungkin sudah menjadi daya tarik pada setiap tampilan interface pada users, disini kami menawarkan jasa pembuatan website yang sesuai dengan permintaan.</p>
                  <!-- <a href="#" class="btn btn-danger">Detail</a> -->
                </div>
                <div class="col-sm-4 text-center">
                  <img src="{{asset('tampilan/assets/img/android.png')}}" class="icon2">
                  <h4>Android Development</h4>
                  <p>Android pada umumnya adalah sebuah software yang sudah banyak terdapat pada Smartphone sekarang, disini kami menawarkan pembuatan Mobile Android App sesuai dengan permintaan.</p>
                  <!-- <a href="#" class="btn btn-danger">Detail</a> -->
                </div>
                <div class="col-sm-4 text-center">
                  <img src="{{asset('tampilan/assets/img/back.png')}}" class="icon3">
                  <h4>Web Development</h4>
                  <p>Source code dibuat dengan sangat teliti memperhatikan setiap instruksi yang dibuat dengan logika yang tersusun rapih Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <!-- <a href="#" class="btn btn-danger">Detail</a> -->
                 </div>
              </div>

          </div>
        </div>
      </section>
      <!-- akhir layanan -->

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