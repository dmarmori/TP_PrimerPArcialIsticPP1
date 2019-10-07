<?php
	
	$CountVehiculos = 0;
	$AcumulaPrecio = 0;

	$archivoListaFact = fopen("VehiculosFact.txt", "r") or die("Imposible arbrir el archivo");

	date_default_timezone_set('America/Argentina/Buenos_Aires');

	while(!feof($archivoListaFact)) 
	{
		$objetoVehiculos = json_decode(fgets($archivoListaFact));
		//Guardo los datos del archivo VehiculosFact en variables para manipular luego.
		$PatenteFact = $objetoVehiculos->PatenteFact;
		$HorarioIniFact = $objetoVehiculos->HorarioIniFact;
		$HorarioSalFact = $objetoVehiculos->HorarioSalFact;
		$ValorFacturado = $objetoVehiculos->ValorFacturado;

		echo "Patente: ".$PatenteFact."<br>"
		    ."- Fecha-Hora Entrada: ".date("Y-m-d h:i:sa",$HorarioIniFact)."<br>"
		    ." - Fecha-Hora Salida: ".date("Y-m-d h:i:sa",$HorarioSalFact)."<br>"
		    ." - Valor Facturado: $".$ValorFacturado
			."<br><br><br>";

		$CountVehiculos++;
		$AcumulaPrecio = $AcumulaPrecio + $ValorFacturado;

	}
	
	fclose($archivoListaFact);

	//Muestra cantidad de vehiculos ingresados y valor  total de la factura

	echo "Cantidad total de autos facturados: ".$CountVehiculos."<br>"
		."Facturacion Total: $".$AcumulaPrecio;

	exit();

?>	