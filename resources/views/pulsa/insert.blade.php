@extends('./layout')

@section('costom_style_pages')
    <link rel="stylesheet" href="{{url('asset/plugins/select2/select2.min.css')}}">
@stop

@section('content_main_pages')
	<div class="col-md-3">
	</div>
	<div class="col-md-9">
		<div class="box box-danger">
			<div class="box-header">
				
			</div>
			<div class="box-body">
				<form action="" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama Personil</label>
						<div class="col-sm-6">
							<select class="form-control select2" name="jabatan_id" id="personil" style="width: 100%;">
							<option value="">...</option>
							@foreach($personil as $personil)
							<option value="{{$personil['id']}}">{{$personil['nama_personil']}}</option>
							@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">No Handphone</label>
						<div class="col-sm-6">
							<select class="form-control" name="jabatan_id" id="no_hp" style="width: 100%;">
							
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Tanggal Pembayaran</label>
						<div class="col-sm-6">
							<select class="form-control" name="jabatan_id" id="no_hp" style="width: 100%;">
							
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Jumlah Bayar</label>
						<div class="col-sm-6">
							<select class="form-control" name="jabatan_id" id="no_hp" style="width: 100%;">
							
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Bulan Pemakaian</label>
						<div class="col-sm-6">
							<select class="form-control" name="jabatan_id" id="no_hp" style="width: 100%;">
							
							</select>
						</div>
					</div>					
				</form>
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
    	});

    	$("#personil").change(function() {
			$('#no_hp option').remove();
    		$.getJSON("{{url('/ajax-nohp')}}/"+$('#personil').val(), function(data) {
			var options = '';
				options += '<option value="'+ data[0].no_hp_telkomsel +'">'+ data[0].no_hp_telkomsel + '</option>';
				options += '<option value="'+ data[0].no_hp_indosat +'">'+ data[0].no_hp_indosat + '</option>';
			$('#no_hp').append(options);
		});
		});
	</script>
@stop