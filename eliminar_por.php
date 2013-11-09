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
	<div class="med" style="height:550px;">
		<p style="margin-top:20px;margin-left:100px;font-family:Arial;color:rgb(187, 142, 142);font-weight:bold;text-shadow:2px 2px 2px #000;">Ingresa el N° de serie de registro a Eliminar: </p>
		<?php include('conexion_base.php'); ?>
		<?php
			echo "<form method='POST' style='margin-left:100px;'>
					<input type='text' name='eliminar' style='width:200px;height:25px;background-color:rgb(245, 245, 163);border-radius:3px;'>
					<input type='submit' value='Buscar Registro' style='width:150px;height:30px;'>
				</form>";

			if(isset($_POST)){

				$sql22=mysqli_query($con,"SELECT * FROM auto WHERE serie='$_POST[eliminar]'");

				echo "<div style='margin-left:300px;margin-top:50px;background-color:rgb(216, 216, 143);margin-right:100px;padding-left:50px;height:400px;width:550px;border-radius:3px;border:1px solid black'>";
					while($row5 = mysqli_fetch_array($sql22))
					{	
						echo "<div style='margin-bottom:0'>";
						echo "<h4 class='tu' style='display:inline-block'>Marca: </h4><p style='display:inline-block'>".$row5['marca']."</p>";
						echo "</div>";
						echo "<div style='margin-bottom:0,margin-top:0'>";
				 		echo "<h4 class='tu' style='display:inline-block'>Modelo: </h4><p style='display:inline-block'>".$row5['modelo']."</p>";
				 		echo "</div>";
				 		echo "<div style='margin-bottom:0'>";
				 		echo "<h4 class='tu' style='display:inline-block'>Año de Fabricación: </h4><p style='display:inline-block'>".$row5['ano_fabricacion']."</p>";
				 		echo "</div>";
				 		echo "<div style='margin-bottom:0'>";
				 		echo "<h4 class='tu' style='display:inline-block'>Color: </h4><p style='display:inline-block'>".$row5['color']."</p>";
			  			echo "</div>";
			  			echo "<div style='margin-bottom:0'>";
			  			echo "<h4 class='tu' style='display:inline-block'>N° de Serie: </h4><p style='display:inline-block'>".$row5['serie'];
				  		echo "</div>";
				  		echo "<div style='margin-bottom:0'>";
				  		echo "<h4 class='tu' style='display:inline-block'>Pais de Fabricación: </h4><p style='display:inline-block'>".$row5['pais']."</p>";
				  		echo "</div>";
				  		echo "<div style='margin-bottom:0'>";
				  		echo "<h4 class='tu' style='display:inline-block'>Proveedor: </h4><p style='display:inline-block'>".$row5['proveedor']."</p>";
						echo "</div>";
						echo "<br>";
						echo "<a href='conexion.php'><button style='float:right;margin-right:100px;width:100px;height:30px;'>Eliminar</button></a>";
					}

				echo "</div>";

				$sql4=mysqli_query($con,"DELETE FROM auto WHERE serie='$_POST[eliminar]'");



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