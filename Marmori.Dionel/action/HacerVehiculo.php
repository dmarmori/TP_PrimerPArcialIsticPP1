<?php
	$miobjetoVehiculo=new stdClass();

	//$IngresoHora = time();
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$IngresoHora = mktime(); 
	//$IngresoHora = date ('H:i:s',$IngresoHora);

	$miobjetoVehiculo->Patente = $_GET['Patente'];
	$miobjetoVehiculo->Horario = $IngresoHora;

	$archivo=fopen('Vehiculos.txt','a');
	fwrite($archivo,json_encode($miobjetoVehiculo)."\n");
	fclose($archivo);

header("Location: page/IngresoPatenteOK.php");

?>	