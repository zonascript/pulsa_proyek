@extends('./layout')

@section('content_main_pages')
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-body">
				<h3>Rekap Pemakaian Pulsa</h3>
				Pemakaian : $bulan & $tahun
				<div class="pull-right" style="padding:8px">
					<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Tambah Pemakaian</button>
					<a href="#" class="btn btn-primary btn-sm">Cetak</a>
				</div>
				<table class="table table-bordered" style="text-aling:center">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama Personil</th>
							<th>Jabatan</th>
							<th>No HP</th>
							<th>Jenis Kartu</th>
							<th>Tanggal Jatuh Tempo Pembayaran</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0 ?>
						@foreach($personil as $personil)
						<?php $i++ ?>
						<tr>
							<td>{{$i}}</td>
							<td>{{$personil['nama_personil']}}</td>
							<td>{{$personil['jabatan']['nama_jabatan']}}</td>
							<td>{{$personil['no_hp']}}</td>
							<td>{{$personil['jenis_kartu']['nama_kartu']}}</td>
							<td>{{$personil['jatuh_tempo']}}</td>
						</tr>

						@endforeach
					</tbody>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->

	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal title</h4>
				</div>
				<div class="modal-body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
@stop