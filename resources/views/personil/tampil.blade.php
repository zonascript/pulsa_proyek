@extends('./layout')

@section('costom_style_pages')
    <link rel="stylesheet" href="{{url('asset/plugins/datatables/dataTables.bootstrap.css')}}">
@stop

@section('content_main_pages')
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-body">
				<div class="col-md-offset-3 col-md-9">
					<h3>Daftar Personil Proyek Masuk<br> Tanggungan Proyek Indarung VI</h3>
					<table class="table table-bordered" id="personil" style="text-aling:center">
						<thead>
							<tr>
								<th width="10px">No.</th>
								<th>Nama Personil</th>
								<th>Jabatan</th>
								<th>No Telkomsel</th>
								<th>No Indosat</th>
							</tr>
						</thead>
					</table>
				</div>
			</div><!-- /.box-body -->
		</div><!-- /.box -->

	</div>
@stop

@section('costom_js_pages')
<!-- Select2 -->

	<script src="{{url('asset/plugins/datatables/jquery.dataTables.js')}}"></script>
	<script src="{{url('asset/plugins/datatables/dataTables.bootstrap.js')}}"></script>

	<script>
	// $(function() {
	    var arsiptable = $('#personil').DataTable({
	        dom: '<<t>p>',
	        processing: true,
	        serverSide: true,
	        ajax: '{!!url("personil/any-data")!!}',
	        columns: [
	        	{data: 'id', name:'id', orderable:false},
	        	{data: 'nama_personil', name:'nama_personil', orderable:false},
	        	{data: 'jabatan', name:'jabatan', orderable:false},
	        	{data: 'no_hp_telkomsel', name:'no_hp_telkomsel', orderable:false},
	        	{data: 'no_hp_indosat', name:'no_hp_indosat', orderable:false},
	        ]
	    });
	</script>
@stop