@extends('./layout')

@section('costom_style_pages')
    <link rel="stylesheet" href="{{url('asset/plugins/select2/select2.min.css')}}">
@stop

@section('content_main_pages')
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				asd
			</div>
			<div class="box-body">
				<div class="pull-left" style="padding:10px">
					<div class="input-group input-group-sm">
						<input class="form-control" type="text">
						<span class="input-group-btn">
							<button class="btn btn-info btn-flat" type="button">Report</button>
						</span>
					</div>
				</div>
				<div class="pull-right" style="padding:10px">
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

@section('costom_js_pages')
<!-- Select2 -->
    <script src="{{ url('asset/plugins/select2/select2.full.min.js')}}"></script>
	    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
    })</script>
@stop