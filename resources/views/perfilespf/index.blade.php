@extends('master')
@section('title', 'Ver Todos los Registros')
@section('content')

	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2> Registros de Perfl de Grado </h2>
			</div>
			@if ($perfilespf->isEmpty())
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
						@foreach($perfilespf as $perfilpf)
							<tr>
								<td>{!! $perfilpf->id !!}</td>
								<td>{!! $perfilpf->title !!}</td>
								<td>{!! $perfilpf->status ? 'Pendiente' : 'Aceptado' !!}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@endif
		</div>
	</div>
@endsection