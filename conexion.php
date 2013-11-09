<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/select_estilo.css">
	<link rel="stylesheet" type="text/css" href="css/hoja_de_estilo.css">
	<script src="js/jquery-2.0.1.min.js"></script>
	<script src="js/eventos-emergentes.js"></script>
</head>
<body>
	<!--********* Conectandose con la base e insetando datos *********-->
	<?php include('conexion_base.php'); ?>
	<?php include('insertar_datos.php'); ?>
	<!--/////////////////////////////////////////////////////////////-->

	<div class="cab"><h2>Stock de Autos</h2></div>
	<div class="med">
		<div class='bn'>
			<h4>Buscar por: </h4>
			<a href="buscar_por.php">
				<div class='bn-ch' id='un'>
					<img src='img/SEARCH.png' title='Buscar'>
					<p>Buscar</p>
				</div>
			</a>
			<a href="modificar_por.php">
				<div class='bn-ch' id='do'>
					<img src='img/edit_notes.png' title='Modificar Registro'>
					<p>Modificar</p>
				</div>
			</a>
			<a href="eliminar_por.php">
				<div class='bn-ch' id='tr'>
					<img src='img/delete.png' title='Eliminar Registro'>
					<p>Eliminar</p>
				</div>
			</a>
		</div>

		<div id="tod">
			<?php include('seleccionar_todo.php'); ?>
		</div>
		
		<div id='muestra1'>
			
		</div>
			
		<div id='muestra2'>
			
		</div>

		<div id='muestra3'>
			
		</div>

		<div id='muestra4'>
		</div>
	
	</div>

	<div class="subheader">
		<a href="aplicacion.html">
			<div class="uno">
				<img src="img/home.png" class="imgn">
				<p>Principal</p>
			</div>
		</a>
		<a href="medina.html">
			<div class="uno">
				<img src="img/carr.png" class="imgn">
				<p>Nuevo</p>
			</div>
		</a>
		<div class="uno">
			<img src="img/llanta.png" class="imgn">
			<p>Nuevo</p>
		</div>
		<div class="uno">
			<img src="img/informe.png" class="imgn">
			<p>Nuevo</p>
		</div>
		<a href="conexion.php">
			<div class="uno">
				<img src="img/SaltarViaje.png" class="imgn">
				<p>Stock</p>
			</div>
		</a>
		
	</div>

	
</body>
</html>




