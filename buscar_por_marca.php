<?php include('conexion_base.php'); ?>
<?php
				echo "<div class='bot'>
				<div class='buu'>
					<button>Buscar</button>
					<form method='POST'>
						<input type='text' placeholder='Buscar' name='busca'>
						<input type='submit' value='Buscar' id='eve'>	
					</form>
				</div>";

				$valor=$_POST['busca'];
				if($valor==" "){
					echo "nada";
				}

				$sql3=mysqli_query($con,"SELECT * FROM auto WHERE marca='$_POST[busca]'");

				echo "<center><table id='caj'>";
				
				while($row1 = mysqli_fetch_array($sql3))
			  	{

			  		echo "hola entre";
			  		echo "<tr>";
			 		echo "<td class='hh'>".$row1['marca']."</td>";
			 		echo "<td class='hh'>".$row1['modelo']."</td>";
			 		echo "<td class='hh'>".$row1['ano_fabricacion']."</td>";
			 		echo "<td class='hh'>".$row1['color']."</td>";
		  			echo "<td class='hh'>".$row1['serie']."</td>";
			  		echo "<td class='hh'>".$row1['pais']."</td>";
			  		echo "<td class='hh'>".$row1['proveedor']."</td>";

					echo "</tr>";
			  		}
		  		echo "</table></center>";

?>		