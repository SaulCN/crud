<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['nombre_tramito'],
		$_POST['curp'],
		$_POST['nombre'],
		$_POST['apellido_P'],
		$_POST['apellido_M'],
		$_POST['telefono'],
		$_POST['celular'],
		$_POST['correo'],
		$_POST['nivel'],
		$_POST['municipio'],
		$_POST['asunto']
				);

	echo $obj->agregar($datos);
	

 ?>