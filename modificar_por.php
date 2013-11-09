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

	<div class="cab"><h2>Eliminar Registro de Automóvil</h2></div>
	<div class="med" style="height:430px">
		<p style="margin-top:20px;margin-left:100px;"></p>
		<?php include('conexion_base.php'); ?>
		<?php
			echo "<form method='POST'>
					dato a modificar: 
					<input type='text' name='bus'>
					N° de registro: 
					<input type='text' name='serie'>
					<input type='submit' value='Modificar'>
				</form>";

			$sql5="UPDATE auto SET modelo='$_POST[bus]' WHERE serie='$_POST[serie]'";


			if(mysqli_query($con,$sql5)){
				echo "El siguiente dato fue eliminado".$_POST['bus'];
			}

		?>
		
	
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