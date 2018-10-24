@extends('master')
@section('title', 'Contact')

@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="well well bs-component">
			<form class="form-horizontal" method="post">
				@foreach ($errors->all() as $error)
				<p class="alert alert-danger">{{ $error }}</p>
				@endforeach

				@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif


				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<fieldset>
					<legend> Registrar perfil de grado</legend>

					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Password:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="mayor a 5 caracteres" name="title">
						</div>
					</div>
  					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Email:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="tucorreo@ejemplo.com" name="title">
						</div>
					</div>
					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Telefono:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="fijo o celular" name="title">
						</div>
					</div>
					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Cod Sis:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="Ingrese su Codigo Sis" name="title">
						</div>
					</div>
					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Nombre y apellidos:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="ApPat/ApMat/Nombres" name="title">
						</div>
					</div>

					
					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button class="btn btn-default">Cancelar</button>
							<button type="submit" class="btn btn-primary">Enviar</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
@endsection