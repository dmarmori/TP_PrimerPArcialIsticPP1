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

				while ($diffSegundos >= 3600) 
				{			
					if ($diffSegundos >= 3600) 
					{
						$contadorF++;
						$diffSegundos = $diffSegundos - 3600;
					}
					else if ($diffSegundos >= 1800)
					{
						$contadorF++;
					}					
				}
				$resultado = $contadorF * $PrecioF;

				//Guardo datos de facturado en archivo
				$archivoVehiculos=fopen('VihiculosFact.txt','a');
				//fwrite($archivo,json_encode($miobjeto)."\n");
				fclose($archivoVehiculos);

				//header("Location: /Marmori/Facturar.php?exito");
				header("Location: /Marmori/Facturar.php?exito=exito&cobrar=".$resultado."&ingreso=".$horaEntrada."&salida=".$SalidaHora);
				fclose($archivo);
				exit();
			}
			else
			{
				header("Location: /Marmori/Facturar.php?error");
			}
      	}

      	//break;
      	//Prueba para deneter el .php y verificar algo!
      	//var_dump("prueba");
      	//die();
      		
?>