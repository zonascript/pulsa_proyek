@extends('./master')

@section('content')
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-body">
				<div class="col-md-6">
					<div class="form-group">
						<label for="form-label">Bulan</label>
						<select name="" id="" class="form-control">
							<option value=""></option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="form-label">Tahun</label>
						<select name="" id="" class="form-control">
							<option value=""></option>
						</select>
					</div>
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
						<?php $i = 1; ?>
					<tbody>
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
								Rp. {{$tran->pemakaian}}<br>
								@endif
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