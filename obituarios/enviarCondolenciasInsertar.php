<?php
include "../config.php";
include "../funciones.php";

	$fecha=$_POST["fecha"];
	$nombreFallecido=$_POST["nombreFallecido"];
	$mailRemitente=$_POST["mail"];
	$mailAfiliado=$_POST["mailAfiliado"];
	$remitente=$_POST["remitente"];
	$mensaje=$_POST["mensaje"];
	$asunto="Condolencias";
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: ".$remitente." <".$mailRemitente.">\r\n";


	$cuerpo = ' 
			<html> 
			<head> 
   			<title>Mensaje de condolencias</title> 
			</head> 
			<body>  
			<p> 
			<b>'.$mensaje.'
			</b>
			</p> 
			<p>Enviado desde http://astreafunerarialafe.com</p>
			</body> 
			</html> 
			'; 
	
		$sql="insert into condolencias values (null,'$fecha','$nombreFallecido','$remitente','$mailRemitente','$mensaje')";
		$res=ejecutarSQL($sql);
		saveRegister($VP_usuario, "INSERTAR", "Condolencias: Nuevo Registro");
	
		if($res)
		{
			echo "<span class=\"row\"><br /><div class=\"col-xs-5\"><div class=\"alert alert-success alert-dismissable\">
                    <i class=\"fa fa-check\"></i>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    Tu mensaje ha sido enviado!
                  </div></span>";
		} 
		else
		{
			echo "<span class=\"row\"><br /><div class=\"col-xs-5\"><div class=\"alert alert-danger alert-dismissable\">
                    <i class=\"fa fa-ban\"></i>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                     Error al enviar el mensaje!
                  </div></span>";
		}

		mail($mailAfiliado, $asunto, $cuerpo, $headers);
?>