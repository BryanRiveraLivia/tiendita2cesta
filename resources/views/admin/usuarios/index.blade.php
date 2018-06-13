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
								<th colspan="4">Opciones</th>
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
										<td><a href="#" data-id="{{$data->id_usuario}}" data-toggle="modal" data-target="#VerUsuario" class="VerUsuario"><img class="opciones" src="{{asset('img/admin/generales/3d-glasses.svg')}}" alt=""></a></td>
										<td><a href=""><img class="opciones" src="{{asset('img/admin/generales/shopping-basket.svg')}}" alt=""></a></td>
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

				<div class="modal fade" id="CrearUsuario" role="dialog">
						<div class="modal-dialog modal-md">
						  <div class="modal-content">
							  <div class="modal-header">
									<h1>Registrar usuario</h1>
							  </div>
							<div class="modal-body">
							  <div class="container-fluid">
								  <div class="row">
									  <div class="col-md-12 col-sm-12 col-xs-12">
											<form action="/usuarios/crear" autocomplete="off" method="post" enctype="multipart/form-data">
												@csrf
													<div class="form-group">
															<label for="usr">Email:</label>
															<input type="email" name="email" class="form-control" id="usr" required>
														  </div>
														  <div class="form-group">
															<label for="pwd">Password:</label>
															<input type="password" name="password" class="form-control" id="pwd" required>
														  </div>
														  <div class="row">
															  <div class="col-md-2">
																	<div class="form-group">
																			<label for="usr">Sr/a:</label>
																			<select name="id_sexo" class="form-control">
																				<?php foreach($sexos as $data){?>
																				<option value="{{$data->id_sexo}}">
																					{{$data->sexo}}</option>
																					<?php }?>
																			</select>
																	</div>
															  </div>
															  <div class="col-md-5">
																	<div class="form-group">
																			<label for="usr">Nombres:</label>
																			<input name="nombres" type="text" class="form-control">
																	</div>
															  </div>
															  <div class="col-md-5">
																	<div class="form-group">
																			<label for="usr">Apellidos:</label>
																			<input name="apellidos" type="text" class="form-control">
																	</div>
															  </div>
																<div class="col-md-4 col-sm-4 col-xs-12">
																		<div class="form-group">
																				<label for="usr">Tipo Doc:</label>
																				<select name="id_documento" class="form-control" id="">
																					<?php foreach($documentos as $data){?>
																					<option value="{{$data->id_tipo_doc}}">{{$data->nom_largo}}</option>
																						<?php }?>
																				</select>
																			  </div>
																  </div>
																<div class="col-md-4 col-sm-4 col-xs-6">
																		<div class="form-group">
																				<label for="usr">Nro. Doc:</label>
																				<input type="text" name="nro_documento" class="form-control">
																		</div>
																  </div>
																  <div class="col-md-4 col-sm-4 col-xs-6">
																		<div class="form-group">
																				<label for="usr">Fec. Nac:</label>
																				<input type="date" name="fec_nac" class="form-control">
																		</div>
																  </div>
																  <div class="col-md-6 col-sm-6 col-xs-6">
																		<div class="form-group">
																				<label for="usr">Celular:</label>
																				<input type="text" name="celular" class="form-control">
																		</div>
																  </div>
																  <div class="col-md-6 col-sm-6 col-xs-6">
																		<div class="form-group">
																				<label for="usr">Telf:</label>
																				<input type="text" name="telefono" class="form-control">
																		</div>
																  </div>
																  <div class="col-md-4 col-sm-6 col-xs-6">
																		<div class="form-group">
																				<label for="usr">Región:</label>
																				<select id="id_region" name="id_region" class="form-control">
																					<?php foreach($regiones as $data){?>
																					<option value="{{$data->id_region}}">{{$data->name}}</option>
																						<?php }?>
																				</select>
																			  </div>
																  </div>
																  <div class="col-md-4 col-sm-6 col-xs-6">
																		<div class="form-group">
																				<label for="usr">Provincia:</label>
																				<select id="id_provincia" name="id_provincia" class="form-control">
																					<?php foreach($provincias as $data){?>
																					<option value="{{$data->id_provincia}}" data-chained="{{$data->id_region}}">{{$data->name}}</option>
																						<?php }?>
																				</select>
																			  </div>
																  </div>
																  <div class="col-md-4 col-sm-6 col-xs-12">
																		<div class="form-group">
																				<label for="usr">Distrito:</label>
																				<select id="id_distrito" name="id_distrito" class="form-control">
																					<?php foreach($distritos as $data){?>
																					<option value="{{$data->id_distrito}}" data-chained="{{$data->id_provincia}}">{{$data->name}}</option>
																						<?php }?>
																				</select>
																			  </div>
																  </div>
															  
															  
														  </div>
														  <button type="submit">Registrar usuario</button>
											</form>
									  </div>
								  </div>
							  </div>
							</div>
						  </div>
						</div>
				</div>

				<div class="modal fade" id="VerUsuario" role="dialog">
						<div class="modal-dialog modal-md">
						  <div class="modal-content">
							  <div class="modal-header">
									<h1>{{$detalle_usuario->nombres}}</h1>
							  </div>
							<div class="modal-body">
							  <div class="container-fluid">
								  <div class="row">
									  <div class="col-md-12 col-sm-12 col-xs-12">
											<form action="/usuarios/crear" autocomplete="off" method="post" enctype="multipart/form-data">
												@csrf
													<div class="form-group">
															<label for="usr">Email:</label>
															<input type="email" name="email" class="form-control" id="usr" required>
														  </div>
														  <div class="form-group">
															<label for="pwd">Password:</label>
															<input type="password" name="password" class="form-control" id="pwd" required>
														  </div>
														  <div class="row">
															  <div class="col-md-2">
																	<div class="form-group">
																			<label for="usr">Sr/a:</label>
																			<select name="id_sexo" class="form-control">
																				<?php foreach($sexos as $data){?>
																				<option value="{{$data->id_sexo}}">
																					{{$data->sexo}}</option>
																					<?php }?>
																			</select>
																	</div>
															  </div>
															  <div class="col-md-5">
																	<div class="form-group">
																			<label for="usr">Nombres:</label>
																			<input name="nombres" type="text" class="form-control">
																	</div>
															  </div>
															  <div class="col-md-5">
																	<div class="form-group">
																			<label for="usr">Apellidos:</label>
																			<input name="apellidos" type="text" class="form-control">
																	</div>
															  </div>
																<div class="col-md-4 col-sm-4 col-xs-12">
																		<div class="form-group">
																				<label for="usr">Tipo Doc:</label>
																				<select name="id_documento" class="form-control" id="">
																					<?php foreach($documentos as $data){?>
																					<option value="{{$data->id_tipo_doc}}">{{$data->nom_largo}}</option>
																						<?php }?>
																				</select>
																			  </div>
																  </div>
																<div class="col-md-4 col-sm-4 col-xs-6">
																		<div class="form-group">
																				<label for="usr">Nro. Doc:</label>
																				<input type="text" name="nro_documento" class="form-control">
																		</div>
																  </div>
																  <div class="col-md-4 col-sm-4 col-xs-6">
																		<div class="form-group">
																				<label for="usr">Fec. Nac:</label>
																				<input type="date" name="fec_nac" class="form-control">
																		</div>
																  </div>
																  <div class="col-md-6 col-sm-6 col-xs-6">
																		<div class="form-group">
																				<label for="usr">Celular:</label>
																				<input type="text" name="celular" class="form-control">
																		</div>
																  </div>
																  <div class="col-md-6 col-sm-6 col-xs-6">
																		<div class="form-group">
																				<label for="usr">Telf:</label>
																				<input type="text" name="telefono" class="form-control">
																		</div>
																  </div>
																  <div class="col-md-4 col-sm-6 col-xs-6">
																		<div class="form-group">
																				<label for="usr">Región:</label>
																				<select id="id_region" name="id_region" class="form-control">
																					<?php foreach($regiones as $data){?>
																					<option value="{{$data->id_region}}">{{$data->name}}</option>
																						<?php }?>
																				</select>
																			  </div>
																  </div>
																  <div class="col-md-4 col-sm-6 col-xs-6">
																		<div class="form-group">
																				<label for="usr">Provincia:</label>
																				<select id="id_provincia" name="id_provincia" class="form-control">
																					<?php foreach($provincias as $data){?>
																					<option value="{{$data->id_provincia}}" data-chained="{{$data->id_region}}">{{$data->name}}</option>
																						<?php }?>
																				</select>
																			  </div>
																  </div>
																  <div class="col-md-4 col-sm-6 col-xs-12">
																		<div class="form-group">
																				<label for="usr">Distrito:</label>
																				<select id="id_distrito" name="id_distrito" class="form-control">
																					<?php foreach($distritos as $data){?>
																					<option value="{{$data->id_distrito}}" data-chained="{{$data->id_provincia}}">{{$data->name}}</option>
																						<?php }?>
																				</select>
																			  </div>
																  </div>
															  
															  
														  </div>
											</form>
									  </div>
								  </div>
							  </div>
							</div>
						  </div>
						</div>
				</div>
@include('admin.plantilla.footer') 
