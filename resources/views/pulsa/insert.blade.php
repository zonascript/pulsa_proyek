@extends('./master')

@section('custom_style')
    <link rel="stylesheet" href="{{url('asset/plugins/select2/select2.min.css')}}">
@stop

@section('content')
	<div class="col-md-3">
	</div>
	<div class="col-md-6">
		<div class="box box-danger">
			<div class="box-body">
				<form action="{{url('pulsa/pemakaian')}}" method="post" id="myForm" class="form-horizontal">
					{!! csrf_field() !!}
					<div class="form-group">
						<label class="col-sm-3 control-label">Nama Personil</label>
						<div class="col-sm-9">
							<select class="form-control select2" name="id_personil" id="personil" style="width: 100%;">
							<option value="">...</option>
							@foreach($personil as $personil)
							<option value="{{$personil['id']}}">{{$personil['nama_personil']}}</option>
							@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">No Handphone</label>
						<div class="col-sm-9">
							<select class="form-control select2" name="no_hp" id="no_hp" style="width: 100%;">
							
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Bulan Pemakaian</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="pemakaian_bulan" data-inputmask="'alias': 'mm/yyyy'" data-mask="">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Jumlah Bayar</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="jumlah" name="pemakaian">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Tanggal Pembayaran</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="tanggal_bayar" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
						</div>
					</div>	
					<div class="form-group">
						<div class="col-md-5"></div>
						<div class="col-sm-3">
							<input type="submit" class="btn btn-success">
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
    <!-- InputMask -->
    <script src="{{ url('asset/plugins/input-mask/jquery.inputmask.js')}}"></script>
    <script src="{{ url('asset/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{ url('asset/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
	<script>

		$(function () {
        	//Initialize Select2 Elements
        	$(".select2").select2();
    	});
		$("[data-mask]").inputmask();
    	$("#personil").change(function() {
			$('#no_hp option').remove();
			$('#no_hp').select2();
    		$.getJSON("{{url('pulsa/ajax-nohp')}}/"+$('#personil').val(), function(data) {
			var options = '<option selected>...</option>';
				options += '<option value="'+ data[0].no_hp_telkomsel +'">'+ data[0].no_hp_telkomsel + '</option>';
				options += '<option value="'+ data[0].no_hp_indosat +'">'+ data[0].no_hp_indosat + '</option>';
			$('#no_hp').append(options);
		});
		});
	</script>
@stop