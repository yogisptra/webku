
<div class="panel-heading">
<h3 class="panel-title">Data Laporan Pelanggan</h3>
</div>
<table border="1">
	<thead>
		<tr>
			<th class="text-center">No.</th>
			<th class="text-center">Nama Depan</th>
			<th class="text-center">Nama Belakang</th>
			<th class="text-center">Email</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data_pelanggan as $data)
		@php $no = 1 @endphp
		<tr>
			<td class="text-center">{{$no++}}</td>
			<td class="text-center">{{$data->nama_depan}}</td>
			<td class="text-center">{{$data->nama_belakang}}</td>
			<td class="text-center">{{$data->email}}</td>
			
		</tr>
		@endforeach
	</tbody>
</table>
<center><p>Total Pelanggan {{count($data_pelanggan)}}</p></center>
