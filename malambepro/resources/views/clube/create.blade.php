@extends('layouts.admin')
	@section('content')
		<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    			<strong> Usuario Adicionado com sucesso.</strong>
		</div>

		<div class="row">
	        <div class="col-lg-12">
	            <h3 class="page-header">Usuario / Adicionar</h3>
	        </div>
	        <!-- /.col-lg-12 -->
	    </div>
	    <!-- /.row -->

            <div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	<a data-toggle="collapse" href="#collapse1" class="panel-collapse">Club Form</a>
		    </h3>
		  </div>
		  	{{-- <div id="collapse1" class="panel-collapse collapse" aria-expanded="true"> --}}
		  	<div id="collapse1" class="collapse in">
			  <div class="panel-body">
			    {!! Form::open(['url'=>'clube','method'=>'POST','id'=>'frm-insert-clube','files'=>true]) !!}
			    	<div class="form-group row">
			    		<div class="col-md-6">
			    			{!! Form::label('name','Name',['for'=>'name','class'=>'col-sm-0 col-form-label col-form-label-sm']) !!}
			    			{!! Form::text('name','',['id'=>'name','class'=>'form-control form-control-sm','placeholder'=>'example: john']) !!}
			    		</div>
			    		<div class="col-md-6">
			    			{!! Form::label('emblema','Emblema',['for'=>'path','class'=>'col-sm-0 col-form-label col-form-label-sm']) !!}
			    			{!! Form::file('path',['id'=>'path','class'=>'file-loading']) !!}
			    		</div>
			    	</div>
			  </div>
			  <div class="panel-footer"> {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}</div>
			  {!! Form::close() !!}
		  	</div>
		</div>
	@endsection

	@section('scripts')
		{!! Html::script('js/clube/create.js') !!}
	@endsection