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
							<th>Jabatan</th>
							<th>Nama Personil</th>
							<th>No. Handphone</th>
							<th>Provider</th>
							<th>Total</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
						</tr>
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