<?php
	$PrecioF = 100;	
	$contadorF = 10;
	$borrar = false;
	
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
				$borrar = true;
				$diffSegundos = $horaSalida - $horaEntrada;
				$diffAlternativo = $diffSegundos;
				/*while ($diffAlternativo >= 3600) 
				{			
					if ($diffAlternativo >= 3600) 
					{
						$contadorF++;
						$diffAlternativo = $diffAlternativo - 3600;
					}
					else if ($diffAlternativo >= 1800)
					{
						$contadorF++;
					}					
				}*/
				$resultado = $contadorF * $PrecioF;
				//$resultado = $contadorF * $PrecioF;
				header("Location: /Marmori/Facturar.php?cobrar=".$resultado."&ingreso=".$horaEntrada."&salida=".$horaSalida);
				fclose($archivo);
				exit();
			}
			else
			{
				header("Location: /Marmori/Facturar.php?error=patenteinexistente");
			}
      	}
      		
?>