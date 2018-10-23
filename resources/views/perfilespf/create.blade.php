@extends('master')
@section('title', 'Contact')

@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="well well bs-component">
			<form class="form-horizontal">
				<fieldset>
					<legend> Registrar perfil de grado</legend>
					<div class="form-group">
						<label for="title" class="col-lg-2 control-label"> Titulo</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="Title">
						</div>
					</div>
					<div class="form-group">
						<label for="content" class="col-lg-2 control-label">Descripción</label>
						<div class="col-lg-10">
							<textarea class="form-control" rows="3" id="content"></textarea>
							<span class="help-block">Escriba la descripción de su perfil de grado</span>
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