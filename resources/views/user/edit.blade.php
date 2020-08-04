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
						    <form action="/user/{{$user->id}}/update" method="POST">
						    		{{csrf_field()}}
								<div class="form-group row">
								    <label for="nama" class="col-sm-2">Nama</label>
								  <div class="col-sm-5">
								    <input name="name" type="text" class="form-control" id="name" placeholder="Nama" value="{{$user->name}}">
								  </div>
								</div>

						        <div class="form-group row">
						    			<label for="email" class="col-sm-2 col-form-label">Email</label>
						    		<div class="col-sm-5">
						      			<input name="email" type="email" class="form-control" id="email" placeholder="Email" value="{{$user->email}}">
						    		</div>
						  		</div>

						  		<div class="form-row" style="margin-left: -13px;">
						  			  <label for="status" class="col-sm-2 col-form-label">Status</label>
								    <div class="form-group col-sm-2">
								      <select name="role" id="provinsi" class="form-control">
								        <option selected>Role</option>
								        <option value="Admin" @if($user->role == 'Admin') selected @endif>Admin</option>
						        		<option value="User" @if($user->role == 'User') selected @endif>User</option>
								      </select>
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