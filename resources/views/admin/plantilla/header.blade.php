<!DOCTYPE html>
<html lang="es">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('js/chainedjs/jquery.chained.js')}}"></script>
<script src="{{asset('js/chainedjs/jquery.chained.remote.js')}}"></script>

<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<h1><a href="">2CESTA</a></h1>
				</div>
				<div class="col-md-10">
					<nav>
						<ul>
            <li><a href="" class="activo"><img src="{{asset('img/admin/generales/usuarios.svg')}}" alt="">Usuarios</a>
              <ul>
                <li><a href="">Listar usuarios</a></li>
                <li><a href="#" data-toggle="modal" data-target="#CrearUsuario">Registrar usuario</a></li>
                <li><a href="">Log de usuarios</a></li>
              </ul>
            </li>
              <li><a href=""><img src="{{asset('img/admin/generales/producto.svg')}}" alt="">Productos</a>
                <ul>
                    <li><a href="">Lista de productos</a></li>
                    <li><a href="">Registrar Producto</a></li>
                    <li><a href="">Categorías</a></li>
                    <li><a href="">Marcas</a></li>
                    <li><a href="">Etiquetas</a></li>
                    <li><a href="">Atributos</a></li>
                  </ul>
              </li>
              <li><a href=""><img src="{{asset('img/admin/generales/pedidos.svg')}}" alt="">Pedidos</a>
                <ul>
                    <li><a href="">Lista de pedidos</a></li>
                  </ul>
              </li>
              <li><a href=""><img src="{{asset('img/admin/generales/delivery.svg')}}" alt="">Delivery</a>
                <ul>
                    <li><a href="">Pedidos en cola</a></li>
                    <li><a href="">Registrar motorizado</a></li>
                  </ul>
              </li>
              <li><a href=""><img src="{{asset('img/admin/generales/configuracion.svg')}}" alt="">Configuración</a>
                <ul>
                    <li><a href="">Aperturar</a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                  </ul>
              </li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<main>
		<div class="container">
			<div class="row">