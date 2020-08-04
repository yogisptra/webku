@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="container-fluid">
			<div class="row">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Data User</h3>
						<div class="right">
						<!-- Button trigger modal -->
							<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i>
							</button>
						</div>
					</div>
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="text-center">Nama</th>
									<th class="text-center">Email</th>
									<th class="text-center">Role</th>
									<th class="text-center">Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data_user as $user)
								<tr>
									<td class="text-center">{{$user -> name}}</td>
									<td class="text-center">{{$user -> email}}</td>
									<td class="text-center">{{$user -> role}}</td>
									<td class="text-center">
										<a href="/user/{{$user->id}}/edit" class="btn btn-warning btn-sm"><i class="lnr lnr-pencil"></i></a>
										<a href="/user/{{$user->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah yakin ingin dihapus?')"><i class="lnr lnr-trash"></i></a>
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
					        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <form action="/user/create" method="POST">
					        	{{csrf_field()}}
							  <div class="form-group">
							  	<label for="exampleInputEmail1">Nama</label>
							    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
							    <label for="exampleInputEmail1">Email</label>
							    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
							  </div>
							  <div class="form-group">
							    <label for="exampleInputPassword1">Password</label>
							    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							  </div>
							   <div class="form-group">
							    <label for="exampleFormControlSelect1">Role</label>
							    <select name="role" class="form-control" id="exampleFormControlSelect1">
							      <option>Admin</option>
							      <option>User</option>
							    </select>
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
		</div>
	</div>

@stop
