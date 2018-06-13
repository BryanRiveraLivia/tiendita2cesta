@include('admin.plantilla.header') 
@include('admin.plantilla.mensajes_session')
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombes</th>
					<th>Apellidos</th>
					<th>Sexo</th>
					<th colspan="2">Doc. Identidad</th>
					<th>Edad</th>
					<th>Provincia</th>
					<th>Fec. Registro</th>
					<th colspan="3">Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i=1;
				foreach($usuarios as $data){
					?>

					<tr>
						<td>{{$i++}}</td>
						<td>{{$data->nombres}}</td>
						<td>{{$data->apellidos}}</td>
						<td>{{$data->sexo}}</td>
						<td>{{$data->nro_documento}}</td>
						<td><span class="tipo_documento">{{$data->dni_doc}}</span></td>
						<td>{{\Carbon\Carbon::parse($data->fec_nac)->diff(\Carbon\Carbon::now())->format('%y años')
					}}</td>
					<td>{{$data->provincia}}</td>
					<td>{{\Carbon\Carbon::parse($data->fec_nac)->format('d/m/Y')
					}}</td>
					<td><a href="{{url('usuarios/show/'.$data->id_usuario)}}"><img class="opciones" src="{{asset('img/admin/generales/planning.svg')}}" alt=""></a></td>
					<td>
						<a href=""><img class="opciones" src="{{asset('img/admin/generales/eraser.svg')}}" alt=""></a>
					</td>
					<td>
						<a title="Eliminar a {{$data->nombres}} {{$data->apellidos}}" onclick="alertEliminarItem(<?= $data->id_usuario;?>,'¿Desea eliminar este usuario?','usuarios','{{ csrf_token() }}')"><img class="opciones" src="{{asset('img/admin/generales/delete.svg')}}" alt=""></a>
					</td>
					</tr>

				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
	{{ $usuarios->links() }}
</div>

@include('admin.usuarios.create')
@include('admin.usuarios.show')
@include('admin.plantilla.footer') 
