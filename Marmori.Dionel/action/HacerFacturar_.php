<?php

$archivoVehiculo = fopen("Vehiculo.txt", "r") or die("Imposible arbrir el archivo vehiculo");

	while(!feof($archivoVehiculo)) 
	{
		$objetoVehiculo = json_decode(fgets($archivoVehiculo));
		if ($objetoVehiculo->Patente == $_GET['Patente'])
		{	
			echo "SIIIIIIIIIIIIIIIIIIIII";
			exit();

		}
		else
		{
			echo "nooooooo";
			exit();	
		}
    }

fclose($archivoVehiculo);
exit();	
?>