<?php
	$PrecioF = 100;	
	$contadorF = 0;
	
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$SalidaHora = mktime(); 

	$PatenteIngresada = $_GET['Patente'];
	
		$archivo = fopen("Vehiculos.txt", "r") or die("Imposible arbrir el archivo");	
		while(!feof($archivo)) 
		{
			$objetoVehiculo = json_decode(fgets($archivo));

			$objetoPatente = $objetoVehiculo->Patente;
			$horaEntrada = $objetoVehiculo->Horario;

			if ($objetoPatente == $PatenteIngresada) 
			{	
				$diffSegundos = $SalidaHora - $horaEntrada;
				$diffAlternativo = $diffSegundos;
				while ($diffAlternativo >= 3) 
				{			
					if ($diffAlternativo >= 3) 
					{
						$contadorF++;
						$diffAlternativo = $diffAlternativo - 3;
					}
					else if ($diffAlternativo >= 1)
					{
						$contadorF++;
					}					
				}
				$resultado = $contadorF * $PrecioF;

				header("Location: /Marmori/Facturar.php?cobrar=".$resultado."&ingreso=".$horaEntrada."&salida=".$SalidaHora);
				fclose($archivo);
				exit();
			}
			else
			{
				header("Location: /Marmori/Facturar.php?error=patenteinexistente");
			}
      	}
      		
?>