@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="container-fluid">
			<div class="row">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Data Pemesan</h3>
					</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<tbody>
							
								<tr>
									<td>Nama Pemesan</td>
									<td>{{$pelanggan->nama_depan}} {{$pelanggan -> nama_belakang}}</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>{{$pelanggan->email}}</td>
								</tr>
								<tr>
									<td>Nomor Handphone</td>
									<td>{{$pelanggan->nomor_hp}}</td>
								</tr>
								<tr>
									<td>Provinsi</td>
									<td>{{$pelanggan->provinsi}}</td>
								</tr>
								<tr>
									<td>Kota</td>
									<td>{{$pelanggan->kota}}</td>
								</tr>
								<tr>
									<td>Kode Pos</td>
									<td>{{$pelanggan->kode_pos}}</td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>{{$pelanggan->alamat}}</td>
								</tr>
								<tr>
									<td>Kategori</td>
									<td>{{$pelanggan->kategori}}</td>
									<a href="/pengerjaan/{{$pelanggan->id}}/pending" class="btn btn-primary yess">Masukkan Pengerjaan</a>
								</tr>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>

@stop
