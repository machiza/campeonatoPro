@extends('layouts.admin')
	@section('content')
		<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    			<strong> Competicao Adicionada com sucesso.</strong>
		</div>

		<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">competicao / Adicionar</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	<a data-toggle="collapse" href="#collapse1" class="panel-collapse">User Form</a>
		    </h3>
		  </div>
		  	{{-- <div id="collapse1" class="panel-collapse collapse" aria-expanded="true"> --}}
		  	<div id="collapse1" class="collapse in">
			  <div class="panel-body">
			    {!! Form::open(['url'=>'competicao','method'=>'POST','id'=>'frm-insert-user']) !!}
			    	<div class="form-group row">
			    		<div class="col-md-6">
			    			{!! Form::label('name','Name',['for'=>'name','class'=>'col-sm-0 col-form-label col-form-label-sm']) !!}
			    			{!! Form::text('name','',['id'=>'name','class'=>'form-control form-control-sm','placeholder'=>'example: john']) !!}
			    		</div>
			    		<div class="col-md-6">
			    			{!! Form::label('jogo','Jogo',['for'=>'jogo','class'=>'col-sm-0 col-form-label col-form-label-sm']) !!}
			    			{!! Form::select('jogo',['selecione','pes2017','pes2018','fifa17','fifa18'],null,['id'=>'jogo','class'=>'form-control form-control-sm']) !!}
			    		</div>
			    		<div class="col-md-6">
			    			{!! Form::label('ranking','Ranking',['for'=>'ranking','class'=>'col-sm-0 col-form-label col-form-label-sm']) !!}
			    			{!! Form::select('ranking_id',['selecione'],null,['id'=>'ranking_id','class'=>'form-control form-control-sm']) !!}
			    		</div>
			    		<div class="col-md-6">
			    			{!! Form::label('formato','Formato',['for'=>'formato','class'=>'col-sm-0 col-form-label col-form-label-sm']) !!}
			    			{!! Form::select('formato',['selecione','Grupos + Mata-Mata','Mata-Mata','Pontos Corridos','Pontos Corridos + Mata-Mata'],null,['id'=>'jogo','class'=>'form-control form-control-sm']) !!}
			    		</div>
			    	</div>
			  </div>
			  <div class="panel-footer"> {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}</div>
			  {!! Form::close() !!}
		  	</div>
		</div>

	@endsection
{{-- 	@section('scripts')
		{!! Html::script('js/competicao/create.js') !!}
	@endsection --}}