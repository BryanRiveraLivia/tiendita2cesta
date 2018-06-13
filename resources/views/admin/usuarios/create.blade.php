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