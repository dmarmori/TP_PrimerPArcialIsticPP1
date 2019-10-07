<?php
	
	//Creo la clase para llenar el archivos VehiculosFact
	$miobjetoVehiculoFact=new stdClass();

	//Inicializo variables
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
				$ValorCobrar = $contadorF * $PrecioF;

				//Paso parametros a la clase miobjetoVehiculoFact
				$miobjetoVehiculoFact->PatenteFact = $objetoPatente;
				$miobjetoVehiculoFact->HorarioIniFact = $horaEntrada;
				$miobjetoVehiculoFact->HorarioSalFact = $SalidaHora;
				$miobjetoVehiculoFact->ValorFacturado = $ValorCobrar;


				//Guardo datos de facturado en archivo
				$archivoVehiculos=fopen('VehiculosFact.txt','a');
				fwrite($archivoVehiculos,json_encode($miobjetoVehiculoFact)."\n");
				fclose($archivoVehiculos);

				//Envio datos Factrar.php para mostrar resltado en pantalla
				//header("Location: /Marmori/Facturar.php?exito");
				header("Location: /Marmori/Facturar.php?exito=exito&cobrar=".$ValorCobrar."&ingreso=".$horaEntrada."&salida=".$SalidaHora);
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