@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="container-fluid">
			<div class="row">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Data Kategori</h3>
						<div class="right">
						<!-- Button trigger modal -->
							<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i>
							</button>
						</div>
					</div>			
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="text-center">No.</th>
									<th class="text-center">Kategori</th>
									<th class="text-center">Aksi</th>
								</tr>
							</thead>
							<tbody>
							@foreach($data_kategori as $kategori)
								<tr>
									<td class="text-center">{{$kategori -> id}}</td>
									<td class="text-center">{{$kategori -> kategori_produk}}</td>
									<td class="text-center">
										<a href="/kategori/{{$kategori->id}}/edit" class="btn btn-warning btn-sm"><i class="lnr lnr-pencil"></i></a>
										<a href="/kategori/delete" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah yakin ingin dihapus?')"><i class="lnr lnr-trash"></i></a>
										<!-- <a href="/kategori/detail" class="btn btn-info btn-sm"><i class="fa fa-credit-card"></i></a> -->
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <form action="/kategori/create" method="POST" enctype="multipart/form-data">
						        	{{csrf_field()}}
								  <div class="form-group">
								    <label for="exampleFormControlSelect1">Kategori Produk</label>
								    <select name="kategori_produk" class="form-control" id="exampleFormControlSelect1">
								      <option>Web Design</option>
								      <option>Android Development</option>
								      <option>Web Development</option>
								    </select>
								   </div>
								  <div class="form-group">
								  	<label for="exampleFormControlSelect1">Deskripsi Produk</label>
			                        <textarea name="deskripsi_produk" class="form-control"></textarea>
			                      </div>
			                      <div class="form-group">
			                        <input type="file" name="avatar" class="form-control">
			                      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        <button type="submit" class="btn btn-primary">Tambah</button>
							      </div>
								</form>
						</div>
				</div>
			</div>
		</div>
	</div>

@stop
