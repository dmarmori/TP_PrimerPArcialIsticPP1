<?php


	$archivo = fopen("usuarios.txt", "r") or die("Imposible arbrir el archivo");
	
		while(!feof($archivo)) 
		{
			$objeto = json_decode(fgets($archivo));
			if ($objeto->Usuario == $_GET['Usuario']) 
			{				 
				if ($objeto->Clave == $_GET['Clave'])
				{
					$usuariologin = $objeto->Usuario;
					session_start();
					$_SESSION['IdLogin']=$usuariologin;
					header("Location: page/ok.php?login=login");
					fclose($archivo);
					exit();
				}
				else
				{
					
					header("Location: page/nok.php");
					fclose($archivo);
					exit();
				}
			}
			 	
		}

		header("Location: page/UsuarioInexistente.php");
		fclose($archivo);
		exit();
		
		fclose($archivo);
	
	exit();

?>