
	<?php include('conexion_base.php'); ?>

	<?php
		$sql1=mysqli_query($con,"SELECT * FROM auto");

			echo "<center><table class='tablita'>";
			echo "<tr class='czc'>
					<th>N°</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Año de Fabricación</th>
					<th>Color</th>
					<th>Serie</th>
					<th>Pais</th>
					<th>Proveedor</th>
				</tr>";
			$i=0;

			while($row = mysqli_fetch_array($sql1))
	  		{
	  			$i=$i+1;
	  			echo "<tr>";
	  			echo "<td class='besi'>".$i."</td>";
	  			echo "<td class='hh'>".$row['marca']."</td>";
	  			echo "<td class='hh'>".$row['modelo']."</td>";
	  			echo "<td class='hh'>".$row['ano_fabricacion']."</td>";
	  			echo "<td class='hh'>".$row['color']."</td>";
	  			echo "<td class='hh'>".$row['serie']."</td>";
	  			echo "<td class='hh'>".$row['pais']."</td>";
	  			echo "<td class='hh'>".$row['proveedor']."</td>";

	  			echo "</tr>";
	  		}
	  		echo "</table></center>";

	?>
	