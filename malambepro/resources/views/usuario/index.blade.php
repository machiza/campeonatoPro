@extends('layouts.admin')
	@section('content')
	   	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
            <strong> Successfully.</strong>
            </div>

		<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Usuarios</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="panel panel-default">
            	<div class="panel-heading">
        		    <h3 class="panel-title">
				<a data-toggle="collapse" href="#collapse1" aria-expanded="true">User Table</a>
			    </h3>
            	</div>
            	<div id="collapse1">
            		<div class="panel-body table-responsive">
            			
            		</div>
            	</div>
            </div>
            @include('usuario.update')
	@endsection

	@section('scripts')
		{!! Html::script('js/usuario/readDeleteUpdate.js') !!}
	@endsection