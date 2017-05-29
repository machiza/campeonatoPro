<div class="modal fade" id="popup-update-clube" role="dialog">
	<div class="modal-dialog modal-lg">

		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title"><div id="msj-success1" class="alert alert-success alert-dismissible" role="alert" style="display:none">
		       <strong> Successfully.</strong>
		       </div>Edit Clube </h4>
		  </div>
		  <div class="modal-body">

		  	<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">
			    	<a data-toggle="collapse" href="#collapse1" class="panel-collapse">Club Form</a>
			    </h3>
			  </div>
			  	{{-- <div id="collapse1" class="panel-collapse collapse" aria-expanded="true"> --}}
			  	<div id="collapse1" class="collapse in">
				  <div class="panel-body">
				    {!! Form::open(['method'=>'PUT','id'=>'frm-update-clube','files'=>true]) !!}
				    	{{ Form::hidden('id',null,['id'=>'id']) }}
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
		  	
		  </div>
		  <div class="modal-footer">
         	  	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        	  </div>
		</div>
		
	</div>
</div>