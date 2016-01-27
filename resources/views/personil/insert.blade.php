@extends('./layout')

@section('costom_style_pages')
    <link rel="stylesheet" href="{{url('asset/plugins/select2/select2.min.css')}}">
@stop

@section('content_main_pages')
	<div class="col-md-12">
		<div class="box box-primary">
			<form class="form-horizontal" action="{{url('personil/tambah-personil')}}" method="post">
				<div class="box-header with-border">
					<div class="col-md-offset-3 col-md-9">
						<h3 class="box-title">Personil Proyek Indarung VI yang dibayarkan oleh proyek</h3>
					</div>
				</div>
				<div class="box-body">
					<div class="col-md-offset-3 col-md-9">
						<div class="form-group">
							{!! csrf_field() !!}
							@if (count($errors) > 0)
							<div class="alert alert-dismissible alert-error">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Mohon Periksa Kembali input.
							</div>
							@endif
							<label class="col-sm-2 control-label">Nama Personil</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama_personil" placeholder="Nama Personil">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Jabatan</label>
							<div class="col-sm-6">
								<select class="form-control select2" name="jabatan_id" style="width: 100%;">
									@foreach($jabatan as $jabatan)
										<option value="{{$jabatan['id']}}">{{$jabatan['nama_jabatan']}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<!-- <div class="form-group">
							<label class="col-sm-2 control-label">Jenis</label>
							<div class="col-sm-6">
								<select class="form-control select2" name="jenis_kartu_id" style="width: 100%;">
								</select>
							</div>
						</div> -->						
						<div class="form-group">
							<label class="col-sm-2 control-label">No Telkomsel</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="no_hp_telkomsel" placeholder="No Handphone">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">No Indosat</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="no_hp_indosat" placeholder="No Handphone">
							</div>
						</div>
						<!-- <div class="form-group">
							<label class="col-sm-2 control-label">Jatuh Tempo Pembayaran</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="jatuh_tempo" placeholder="Jatuh Tempo Pembayaran">
							</div>
						</div> -->
						<div class="box-footer">
							<div class="">
								<button type="reset" class="btn btn-default col-md-2">Reset</button>
								<button type="submit" class="btn btn-success col-md-2 pull-right">Upload</button>
							</div>
						</div><!-- /.box-footer -->
					</div>
				</div><!-- /.box-body -->
			</form>
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