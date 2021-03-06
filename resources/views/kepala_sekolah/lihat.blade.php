@extends('master')
@section('container')

<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('kepala_sekolah') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Kepala Sekolah</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $kepala_sekolah->nama }}</td>
		</tr>

		<tr>
			<td>NIP</td>
			<td>:</td>
			<td>{{ $kepala_sekolah->nip }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $kepala_sekolah->alamat }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$kepala_sekolah->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$kepala_sekolah->updated_at }}</td>
		</tr>
	</table>
</div>
@stop 