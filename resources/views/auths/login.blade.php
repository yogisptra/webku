<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/login.css')}}">

    <title>Login</title>
  </head>
  <body>
    

    <!-- design header login -->
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <img src="{{asset('admin/assets/img/logo.png')}}">
            <h1>Halaman Login | PT. Sans</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir -->

    <!-- container form -->
    <div class="kotak">
      <div class="container">
        <form class="form-auth-small" action="/postlogin" method="POST">
			{{csrf_field()}}
			<div class="log">
            	<h1>Masuk Disini</h1>
          	</div>
			<div class="form-group">
				<label for="signin-email" class="control-label sr-only">Email</label>
				<input name="email" type="email" class="form-control" id="signin-email" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="signin-password" class="control-label sr-only">Password</label>
				<input name="password" type="password" class="form-control" id="signin-password" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button></a>
			<a href="">Lupa Password?</a>
		</form>
      </div>
    </div>
    <!-- akhir -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>