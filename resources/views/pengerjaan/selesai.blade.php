@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="container-fluid">
			<div class="row">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Data Kategori</h3>
					</div>			
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="text-center">No.</th>
									<th class="text-center">Nama Depan</th>
									<th class="text-center">Nama Belakang</th>
									<th class="text-center">Kategori</th>
									<th class="text-center">Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data_pengerjaan as $pengerjaan)
								<tr>
									<td class="text-center">{{$pengerjaan->id}}</td>
									<td class="text-center">{{$pengerjaan->pelanggan->nama_depan}}</td>
									<td class="text-center">{{$pengerjaan->pelanggan->nama_belakang}}</td>
									<td class="text-center">{{$pengerjaan->kategori->kategori_produk}}</td>							<td class="text-center">
										<a href="/pengerjaan/{{$pengerjaan->id}}/proses" class="btn btn-warning btn-sm"><i class="lnr lnr-plus-circle"></i></a>
										<a href="/pengerjaan/{{$pengerjaan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah yakin ingin dihapus?')"><i class="lnr lnr-trash"></i></a>
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