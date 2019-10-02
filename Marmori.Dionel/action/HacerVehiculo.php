<?php
	$miobjetoVehiculo=new stdClass();

	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$IngresoHora = mktime();

	$miobjetoVehiculo->Patente = $_GET['Patente'];
	$miobjetoVehiculo->Horario = $IngresoHora;

	$archivo=fopen('Vehiculos.txt','a');
	fwrite($archivo,json_encode($miobjetoVehiculo)."\n");
	fclose($archivo);

header("Location: page/IngresoPatenteOK.php");

?>	