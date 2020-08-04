<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pesan</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('tampilan/assets/css/pesan.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('tampilan/assets/css/footer.css')}}">

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
              <a class="nav-item nav-link" href="/layanan">Layanan</a>
              <!-- <a class="nav-item nav-link" href="/">Gallery</a> -->
              <!-- <a class="nav-item nav-link" href="/kontak">Kontak</a> -->
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


    <!-- form pemesanan -->
    <section class="pesan" id="psn">
	    <div class="container">
		    <form action="/pesan/create" method="POST">
              {{csrf_field()}}
            	<h3 class="text-center">Silahkan isikan data dibawah ini:</h3>

    			<div class="form-group row">
				    <label for="nama" class="col-sm-2">Nama Lengkap</label>
				  <div class="col-sm-5">
				    <input type="text" class="form-control" id="nama" name="nama_depan" placeholder="Nama Depan">
				  </div>
			      <div class="col-sm-5">
			      	<input type="text" class="form-control" id="nama" name="nama_belakang" placeholder="Nama Belakang">
			      </div>
			    </div>
				
		        <div class="form-group row">
		    			<label for="email" class="col-sm-2 col-form-label">Email</label>
		    		<div class="col-sm-10">
		      			<input type="email" class="form-control" name="email" id="email" placeholder="Email">
		    		</div>
		  		</div>

		  		<div class="form-group row">
		    			<label for="nomor" class="col-sm-2 col-form-label">Nomor HP</label>
		    		<div class="col-sm-5">
		      			<input type="text" class="form-control" name="nomor_hp" id="nomor" placeholder="Nomor Handphone">
		    		</div>
		  		</div>

		  		<div class="form-row">
		  			  <label for="alamat" class="col-sm-2 col-form-label p">Alamat</label>
				    <div class="form-group col-sm-4">
				      <label for="provinsi">Provinsi</label>
				      <select name="provinsi" id="provinsi" class="form-control">
				        <option selected>Pilihan</option>
				        <option>Jawa Barat</option>
				        <option>Jawa Timur</option>
				        <option>Jawa Tengah</option>
				      </select>
				    </div>
				    <div class="form-group col-sm-4">
				      <label for="kota">Kota</label>
				      <select name="kota" id="kota" class="form-control">
				        <option selected>Pilihan</option>
				        <option>Bandung</option>
				        <option>Jakarta</option>
				        <option>Yogyakarta</option>
				      </select>
				    </div>
				    <div class="form-group col-sm-2">
				      <label for="kodepos">Kode Pos</label>
				      <input type="text" name="kode_pos" class="form-control" id="kodepos">
					</div>
  				</div>

  				<div class="form-group col-sm-10 offset-sm-2">
    				<textarea class="form-control ss" id="exampleFormControlTextarea1" name="alamat" rows="5"></textarea>
  				</div>

  				<div class="form-row">
		  			  <label for="kategori" class="col-sm-2 col-form-label p">Kategori</label>
				    <div class="form-group col-sm-4">
				      <label for="kategori">Pilih Kategori</label>
				      <select id="kategori" name="kategori" class="form-control">
				        <option selected>Pilihan</option>
				        <option value="1" @if($kategori->id == '1') selected @endif>Web Design</option>
				        <option value="2" @if($kategori->id == '2') selected @endif>Android Development</option>
				        <option value="3" @if($kategori->id == '3') selected @endif>Web Development</option>
				      </select>
				    </div>
  				</div>

  				<!-- <div class="form-row">
  					<label for="alamat" class="col-sm-2 ">Catatan</label>
  					<div class="form-group col-sm-10 offset-sm-2">
    					<textarea class="form-control y" id="catatan" rows="6"></textarea>
  					</div>
  				</div> -->

  				<div class="ok">
	  				<div class="form-check j">
					    <input type="checkbox" class="form-check-input" id="cek">
					    <label class="form-check-label" for="cek">Apakah Sudah Yakin?</label>
					</div>
					<button type="submit" class="btn btn-primary ">Pesan</button>
					<button type="submit" class="btn btn-danger text-center">Batal</button>
				</div>

		    </form>
		</div>
	</section>
    <!-- akhir form pemesanan -->

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