<?php
	$miobjetoVehiculo=new stdClass();

	$IngresoHora = time();
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$IngresoHora = date ('H:i:s',$IngresoHora);

	$miobjetoVehiculo->Patente = $_GET['Patente'];
	$miobjetoVehiculo->Horario = $IngresoHora;

	$archivo=fopen('Vehiculo.txt','a');
	fwrite($archivo,json_encode($miobjetoVehiculo)."\n");
	fclose($archivo);


?>	