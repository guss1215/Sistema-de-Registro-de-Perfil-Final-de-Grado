@extends('master')
@section('title', 'Ver Todos los Registros')
@section('content')

	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2> Registro de cuenta </h2>
			</div>
			@if ($signin->isEmpty())
				<p> No hay Registros de Perfil de Grado. </p>
			@else
				<table class="table">
					<thread>
						<tr>
							<th>ID</th>
							<th>Titulo</th>
							<th>Status</th>
						</tr>
					</thread>
					<tbody>
						@foreach($signsin as $signin)
							<tr>
								<td>{!! $signin->id !!}</td>
								<td>{!! $signin->title !!}</td>
								<td>{!! $signin->status ? 'Pendiente' : 'Aceptado' !!}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@endif
		</div>
	</div>
@endsection