<?php include('conexion_base.php'); ?>

<?php

	if(isset($_POST)){
		$sql=mysqli_query($con,"INSERT INTO auto (marca,modelo,ano_fabricacion,color,serie,pais,proveedor) VALUES ('$_POST[marca]','$_POST[modelo]','$_POST[fabricacion]','$_POST[color]','$_POST[serie]','$_POST[pais]','$_POST[proveedor]')");
	}

	else{
		echo "que estupides";
	}

?>