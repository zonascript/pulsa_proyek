@extends('./master')


@section('content')
		<div class="box box-default ">
			<div class="box-body">
<form class="form-horizontal" method="post" action="{{url('pulsa/upload-pemakaian')}}" enctype="multipart/form-data">
					{!! csrf_field() !!}
					<div class="box-body">
						<div class="form-group">
                      		<label for="exampleInputFile" class="col-sm-2 control-label">Excel Pemakaian Pulsa</label>
                      		<div class="col-sm-10">
                      			<input type="file" id="exampleInputFile" name="excel">
                      			<p class="help-block">*Upload File Sesuai Tamplate</p>
                    		</div>
                    	</div>
						<div class="box-footer">
							<div class="">
								<button type="reset" class="btn btn-default col-md-2">Reset</button>
								<button type="submit" class="btn btn-success col-md-2 pull-right">Upload</button>
							</div>
						</div><!-- /.box-footer -->
					</div>
				</form>
				</div></div>
@stop