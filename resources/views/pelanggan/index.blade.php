@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="container-fluid">
			<div class="row">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Data Pelanggan</h3>
					</div>
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="text-center">Nama Depan</th>
									<th class="text-center">Nama Belakang</th>
									<th class="text-center">Email</th>
									<th class="text-center">Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data_pelanggan as $pelanggan)
								<tr>
									<td class="text-center">{{$pelanggan->nama_depan}}</td>
									<td class="text-center">{{$pelanggan->nama_belakang}}</td>
									<td class="text-center">{{$pelanggan->email}}</td>
									<td class="text-center">
										<a href="/pelanggan/{{$pelanggan->id}}/edit" class="btn btn-warning btn-sm"><i class="lnr lnr-pencil"></i></a>
										<a href="/pelanggan/{{$pelanggan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah yakin ingin dihapus?')"><i class="lnr lnr-trash"></i></a>
										<a href="/pelanggan/{{$pelanggan->id}}/detail" class="btn btn-info btn-sm"><i class="fa fa-credit-card"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop
