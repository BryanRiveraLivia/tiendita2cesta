@include('admin.plantilla.header') 
@include('admin.plantilla.mensajes_session')
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
				</tr>
			</thead>
			<tbody>

					<tr>
						<td>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</td>
					</tr>
			</tbody>
		</table>
	</div>
</div>

@include('admin.usuarios.create')
@include('admin.usuarios.show')
@include('admin.plantilla.footer') 