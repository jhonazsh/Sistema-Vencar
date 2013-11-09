<?php
	$servidor="localhost";
	$usuario="root";
	$contrasena="";
	$dbname="base_autos";

	$con=mysqli_connect($servidor,$usuario,$contrasena,$dbname);

	if(mysqli_connect_errno($con)){
		echo "coneccion con mysql fallo: ".mysqli_connect_error();
	}
?>