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
						<label for="title" class="col-lg-2 control-label"> Nombre Estudiante:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="Ap. paterno/Ap. materno/ Nombre" name="title">
						</div>
					</div>

					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Teléfono:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="fijo o celular" name="title">
						</div>
					</div>

					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Email:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="tucorreo@ejemplo.com" name="title">
						</div>
					</div>

					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Tutor(es):</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="Nombre del tutor o tutores" name="title">
						</div>
					</div>

					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Carrera:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="Nombre de la carrera a la que pertenece el Estudiante" name="title">
						</div>
					</div>

					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Trabajo Conjunto:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="True / False" name="title">
						</div>
					</div>

					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Gestion de aprobación:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="Gestion actual" name="title">
						</div>
					</div>


  					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Titulo:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="Titulo" name="title">
						</div>
					</div>

					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Area:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="Area a la que pertenece el perfil" name="title">
						</div>
					</div>

  					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> SubArea:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="SubArea a la que pertenece el perfil" name="title">
						</div>
					</div>

					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Modalidad:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="Modalidad de titulacion" name="title">
						</div>
					</div>

					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Objetivo General:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="Objetivo general del proyecto" name="title">
						</div>
					</div>

					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Objetivos Especificos:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="Objetivos especificos planteados para el proyecto" name="title">
						</div>
					</div>


  					<div class="form-group">
						<label for="content" class="col-lg-2 control-label">Descripción:</label>
						<div class="col-lg-10">
							<textarea class="form-control" rows="3" id="content" name="content"></textarea>
							<span class="help-block">Escriba una breve descripción de su perfil de grado</span>
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