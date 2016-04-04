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
	.table > tbody > tr > td{
		line-height: 1;
		padding: 3px;
	}
	.header-text{
		font-size: 20px;
		padding-top: 10px;
	}
	.jabatan{
		font-style: bold;
	}
</style>
		<div class="nav-tabs-custom">
			<div class="text-center box-header">
				<a href="{{url('pulsa/index?tahun=')}}" class="btn  btn-xs"><i class="fa  fa-reply"></i> Prev</a> 
				 <span class="header-text"> Pemakaian Pulsa Tahun </span>
				<a href="{{url('pulsa/index?tahun=')}}" class="btn  btn-xs"><i class="fa  fa-share"></i> Next</a> 
			</div>          
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
							<tr class="table-text">
								<th>{{$data['jabatan']}}</th>
								<td>{{$data['nama']}}</td>
								<td class="text-center">{{$data['no_hp1']}}</td>
								<td class="text-center">{{$data['no_hp2']}}</td>
								<td class="text-center">Rp. {{$data['jumlah_tagihan']}}</td>
								<td class="text-center">{{$data['tgl_bayar']}}</td>
							</tr>
							@endif
						@endforeach
					</table>
				</div>
				@endforeach
				
			</div>
		</div>
@stop
