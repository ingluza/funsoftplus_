<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if ($VP_perfil=="Admin")
{
	$cedula=$_POST["cedula"];
	$nombre=$_POST["nombre"];
	$apellido1=$_POST["apellido1"];
	$apellido2=$_POST["apellido2"];
	$fechaNac=$_POST["fechaNac"];
	$telefono=$_POST["telefono"];
	$celular=$_POST["celular"];
	$direccion=$_POST["direccion"];
	$ciudad=$_POST["ciudad"];
	$email=$_POST["email"];

	$fecha = date_create($fechaNac);
    $fn= date_format($fecha, 'Y-m-d');

	$sql = "UPDATE afiliados SET nombreAfiliado = '$nombre', apellido1Afiliado = '$apellido1', apellido2Afiliado = '$apellido2', fechaNacimiento = '$fn', direccionAfiliado = '$direccion', codigoCiudad = '$ciudad', telefonoAfiliado = '$telefono', movilAfiliado = '$celular', emailAfiliado = '$email' WHERE identificacionAfiliado = '$cedula' ";

	$res=ejecutarSQL($sql);
	saveRegister($VP_usuario, "ACTUALIZAR", "Afiliados: Registro Actualizado");
	
		if($res)
		{
			echo "<span class=\"row\"><br /><div id=\"span\" class=\"col-xs-5\"><div class=\"alert alert-success alert-dismissable\">
                    <i class=\"fa fa-check\"></i>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                     Información registrada exitosamente!
                  </div></span>";
		} 
		else
		{
			echo "<span class=\"row\"><br /><div id=\"span\" class=\"col-xs-5\"><div class=\"alert alert-danger alert-dismissable\">
                    <i class=\"fa fa-ban\"></i>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                     Error al guardar la información!
                  </div></span>";
		}
	

	?>
	<script type="text/javascript">
	$(document).ready(function() {   
    setTimeout(function() { $("#span").fadeOut(100);  },1000);
	});
	</script> 
	<?php

} 
else 
{
	?>
	<script type="text/javascript">
		location.href='error.php';
	</script>
	<?php 
}
?>	