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
						    <form action="/kategori/{{$kategori->id}}/update" method="POST" enctype="multipart/form-data">
						    		{{csrf_field()}}
								<div class="form-row" style="margin-left: -13px;">
						  			  <label for="status" class="col-sm-2 col-form-label">Kategori</label>
								    <div class="form-group col-sm-2">
								      <select name="role" id="provinsi" class="form-control">
								       <option value="Web Design" @if($kategori->kategori_produk == 'Web Design') selected @endif>Web Design</option>
								       <option value="Android" @if($kategori->kategori_produk == 'Android') selected @endif>Android Development</option>
								       <option value="Web Development" @if($kategori->kategori_produk == 'Web Development') selected @endif>Web Development</option>
								      </select>
								    </div>
							   </div>

						        <div class="form-group row">
								  	<label for="exampleFormControlSelect1">Deskripsi Produk</label>
			                        <textarea class="form-control">{{$kategori->deskripsi_produk}}</textarea>
			                    </div>
								<div class="form-group">
								    <label for="exampleInputPassword1">File</label>
								    <input name="avatar" type="file" class="form-control" id="exampleInputPassword1">
							    </div>

							    <div class="col-sm-10 offset-sm-2">
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