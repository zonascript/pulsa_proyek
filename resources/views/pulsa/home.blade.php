@extends('./master')

@section('custom_style')
    <link rel="stylesheet" href="{{url('asset/plugins/select2/select2.min.css')}}">
@stop

@section('content')
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-body">
				<div class="col-md-3">
					<div class="form-group">
						<label for="form-label">Bulan</label>
						<select name="" id="" class="form-control select2" id="bulan">
							<option value="1">Januari</option>
							<option value="2">Februari</option>
							<option value="3">Maret</option>
							<option value="4">April</option>
							<option value="5">Mei</option>
							<option value="6">Juni</option>
							<option value="7">Juli</option>
							<option value="8">Agustus</option>
							<option value="9">September</option>
							<option value="10">Oktober</option>
							<option value="11">November</option>
							<option value="12">Desember</option>
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="form-label">Tahun</label>
						<select name="" id="" class="form-control select2" id="tahun">
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<h3>Rekap Pulsa</h3>
				</div>
			</div>
		</div> 
	</div>
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>Jabatan</th>
							<th>Nama Personil</th>
							<th>No. Handphone</th>
							<th>Total</th>
							<th>Tanggal Bayar</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1 ?>
						@foreach($trans as $tran)
						<tr>
							<td>{{$i}}</td> <?php $i++ 	?>
							<td>{{$tran->nama_jabatan}}</td>
							<td>{{$tran->nama_personil}}</td>
							<td>
								@if($tran->no_hp_telkomsel && $tran->no_hp_indosat)
									@if($tran->no_hp_telkomsel)
									<span class="label label-danger">Telkomsel</span> {{$tran->no_hp_telkomsel}} <br>
									@endif
									@if($tran->no_hp_indosat)
									<span class="label label-warning">Mentari</span> {{$tran->no_hp_indosat}}
									@endif
								</td>
								<td>
								@if($tran->no_hp == $tran->no_hp_telkomsel)
								Rp. {{$tran->pemakaian}}
								@endif<br>
								@if($tran->no_hp == $tran->no_hp_indosat)
								Rp. {{$tran->pemakaian}}<br>
								@endif
								</td>
								<td>
								@if($tran->no_hp == $tran->no_hp_telkomsel)
								{{$tran->tanggal_bayar}} <br>
								@endif

								@if($tran->no_hp == $tran->no_hp_indosat)
								{{$tran->tanggal_bayar}} <br>
								@endif
								</td>
								@else
									@if($tran->no_hp_telkomsel)
									<span class="label label-danger">Telkomsel</span> {{$tran->no_hp_telkomsel}} <br>
									@endif
									@if($tran->no_hp_indosat)
									<span class="label label-warning">Mentari</span> {{$tran->no_hp_indosat}}
									@endif
								</td>
							<td>
							Rp. {{$tran->pemakaian}} <br>
							</td>
							<td>
							{{$tran->tanggal_bayar}} <br>
							</td>
								@endif
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->

	</div>
@stop

@section('costom_js_pages')
    <script src="{{ url('asset/plugins/select2/select2.full.min.js')}}"></script>

	<script>
		$(function () {
        	//Initialize Select2 Elements
        	$(".select2").select2();

	    	$(".bulan").change(function(){
	    		console.log('asd');
	    	});
    	});
	</script>
@stop