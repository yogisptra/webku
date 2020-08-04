@extends('layouts.master')


@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Inputs</h3>
						</div>
						<div class="panel-body">
							@if(session('sukses'))
						    		<div class="alert alert-success" role="alert">
						  				{{session('sukses')}}
									</div>
						    	@endif
						    <form action="/pelanggan/{{$pelanggan->id}}/update" method="POST">
						    		{{csrf_field()}}
								<div class="form-group row">
								    <label for="nama" class="col-sm-2">Nama Lengkap</label>
								  <div class="col-sm-5">
								    <input name="nama_depan" type="text" class="form-control" id="nama" placeholder="Nama Depan" value="{{$pelanggan->nama_depan}}">
								  </div>
							      <div class="col-sm-5">
							      	<input name="nama_belakang" type="text" class="form-control" id="nama" placeholder="Nama Belakang" value="{{$pelanggan->nama_belakang}}">
							      </div>
							    </div>
								
						        <div class="form-group row">
						    			<label for="email" class="col-sm-2 col-form-label">Email</label>
						    		<div class="col-sm-10">
						      			<input name="email" type="email" class="form-control" id="email" placeholder="Email" value="{{$pelanggan->email}}">
						    		</div>
						  		</div>

						  		<div class="form-group row">
						    			<label for="nomor" class="col-sm-2 col-form-label">Nomor HP</label>
						    		<div class="col-sm-5">
						      			<input name="nomor_hp" type="text" class="form-control" id="nomor" placeholder="Nomor Handphone" value="{{$pelanggan->nomor_hp}}">
						    		</div>
						  		</div>

						  		<div class="form-row">
						  			  <label for="alamat" class="col-sm-2 col-form-label" style="margin-left: -13px;">Alamat</label>
								    <div class="form-group col-sm-4">
								      <label for="provinsi">Provinsi</label>
								      <select name="provinsi" id="provinsi" class="form-control">
								        <option value="Jawa Barat" @if($pelanggan->provinsi == 'Jawa Barat') selected @endif >Jawa Barat</option>
								        <option value="Jawa Timur" @if($pelanggan->provinsi == 'Jawa Timur') selected @endif>Jawa Timur</option>
								        <option value="Jawa Tengah" @if($pelanggan->provinsi == 'Jawa Tengah') selected @endif>Jawa Tengah</option>
								      </select>
								    </div>
								    <div class="form-group col-sm-4">
								      <label for="kota">Kota</label>
								      <select name="kota" id="kota" class="form-control">
								        <option value="Bandung" @if($pelanggan->kota == 'Bandung') selected @endif>Bandung</option>
								        <option value="Jakarta" @if($pelanggan->kota == 'Jakarta') selected @endif>Jakarta</option>
								        <option value="Yogyakarta" @if($pelanggan->kota == 'Yogyakarta') selected @endif>Yogyakarta</option>
								      </select>
								    </div>
								    <div class="form-group col-sm-2">
								      <label for="kodepos">Kode Pos</label>
								      <input name="kode_pos" type="text" class="form-control" id="kodepos" value="{{$pelanggan->kode_pos}}">
									</div>
									</div>

									<div style="float: right; margin-right: 12px;" class="form-row col-sm-10">
										<div class="form-group">
										<textarea name="alamat" class="form-control" id="alamat" rows="6">{{$pelanggan->alamat}}</textarea>
										</div>
									</div>
									<div style="margin-left: 15%; " class="col-sm-10">
										<div class="form-check">
									    <input type="checkbox" class="form-check-input" id="cek">
									    <label class="form-check-label" for="cek">Apakah Sudah Yakin?</label>
									</div>			
									<div style ="margin-left: 5px;" class="">
										<button type="submit" class="btn btn-warning">Edit</button>
										<button type="submit" class="btn btn-danger">Batal</button>
									</div>
								</div>
					    </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
@stop