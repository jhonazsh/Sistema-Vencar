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

	<div class="cab"><h2>Busqueda</h2></div>
	<div class="med" style="500">
		<div class='bn'>
			<h4>Buscar por: </h4>
			<div class='bn-child' id='uno'>
				<img src='img/icon49.png' title='Marca'>
				<p>Marca</p>
			</div>
			<div class='bn-child' id='dos'>
				<img src='img/Model.png' title='Modelo'>
				<p>Modelo</p>
			</div>
			<div class='bn-child' id='tres'>
				<img src='img/bar.png' title='Serie'>
				<p>Serie</p>
			</div>
		</div>
		
		<div id='muestra1'>
		
		</div>
			
		<div id='muestra2'>
			
		</div>

		<div id='muestra3'>
			
		</div>

		<div id='muestra4'>
		
		</div>
	
		<?php include('buscar_por_modelo.php'); ?>
		<div style="height:100px;">
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