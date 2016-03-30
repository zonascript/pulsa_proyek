@extends('./master')

@section('custom_style')
<style>
	tr > td{
		line-height: unset;
		padding: unset;
	}
</style>
@stop

@section('content')
<style>
	tr > td{
		line-height: 1;
		padding: 3px;
	}
</style>
		<div class="nav-tabs-custom">          
            <ul class="nav nav-tabs">
            	@foreach($waktu as $bul)
				<li><a href="#{{$bul}}" data-toggle="tab">{{$bul}}</a></li>
				@endforeach
            </ul>
            <div class="tab-content">
            	@foreach($waktu as $bul)
				<div class="tab-pane" id="{{$bul}}">
					<table class="table table-bordered table-striped">
						<tr>
							<th class="text-center">Jabatan</th>
							<th class="text-center">Nama</th>
							<th class="text-center">No Telkomsel</th>
							<th class="text-center">No Indosat</th>
							<th class="text-center">Total Tagihan</th>
							<th class="text-center">Tanggal Bayar</th>
						</tr>
						@foreach($rekap as $data)
							@if($data['bulan'].'-'.$data['tahun'] == $bul)
							<tr>
								<td>{{$data['jabatan']}}</td>
								<td>{{$data['nama']}}</td>
								<td>{{$data['no_hp1']}}</td>
								<td>{{$data['no_hp2']}}</td>
								<td>{{$data['jumlah_tagihan']}}</td>
								<td>{{$data['tgl_bayar']}}</td>
							</tr>
							@endif
						@endforeach
					</table>
				</div>
				@endforeach
				
			</div>
		</div>
@stop
