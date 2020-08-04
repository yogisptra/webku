
<div class="panel-heading">
<h3 class="panel-title">Data Laporan</h3>
</div>			
<table border="1">
	<thead>
		<tr>
			<th class="text-center">No.</th>
			<th class="text-center">Nama Pelanggan</th>
			<th class="text-center">Kategori</th>
		</tr>
	</thead>
	<tbody>
		@php $no = 1 @endphp
		@foreach($data_pengerjaan as $pengerjaan)
		<tr>
			<td class="text-center">{{$no++}}</td>
			<td class="text-center">{{$pengerjaan->pelanggan->nama_depan}}</td>
			<td class="text-center">{{$pengerjaan->kategori->kategori_produk}}</td>

		</tr>
		@endforeach
	</tbody>
</table>	
<center><p>Total Pelanggan {{count($data_pengerjaan)}}</p></center>