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
					<a href="{{url('pulsa/insert')}}" class="btn btn-success btn-sm">Tambah Pemakaian</a>
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