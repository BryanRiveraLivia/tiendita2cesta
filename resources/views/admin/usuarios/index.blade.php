@include('admin.plantilla.header') 

<div class="contenido">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Nombes</th>
								<th>Apellidos</th>
								<th>Sexo</th>
								<th>Doc. Identidad</th>
								<th>Edad</th>
								<th>Celular</th>
								<th>Teléfono</th>
								<th>Región</th>
								<th>Provincia</th>
								<th>Estado</th>
								<th>Fec. Registro</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach($usuarios as $data){
								?>

								<tr>
									<td>{{$data->nombres}}</td>
									<td>{{$data->apellidos}}</td>
									<td>{{$data->sexo}}</td>
									<td>{{$data->nro_documento}} <span>{{$data->dni_doc}}</span></td>
									<td></td>
									<td>{{$data->celular}}</td>
									<td>{{$data->telefono}}</td>
									<td>{{$data->region}}</td>
									<td>{{$data->provincia}}</td>
									<td>{{$data->distrito}}</td>
									<td>{{$data->created_at}}</td>
								</tr>

								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('admin.plantilla.footer') 
