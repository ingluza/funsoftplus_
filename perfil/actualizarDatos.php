<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if ($VP_perfil)
{
	$nombre=$_POST["nombre"];
	$apellido1=$_POST["apellido1"];
	$apellido2=$_POST["apellido2"];
	$telefono=$_POST["telefono"];
	$celular=$_POST["celular"];
	$direccion=$_POST["direccion"];
	$ciudad=$_POST["ciudad"];
	$email=$_POST["email"];

	if ($VP_perfil=="Admin")
	{
		$sql = "UPDATE empleados SET nombreEmpleado= '$nombre', apellido1Empleado = '$apellido1', apellido2Empleado = '$apellido2', direccionEmpleado = '$direccion', telefonoEmpleado = '$telefono', movilEmpleado = '$celular', emailEmpleado = '$email' WHERE identificacionEmpleado = '$VP_cedula' ";
	}
	else
	{
		$sql = "UPDATE afiliados SET nombreAfiliado = '$nombre', apellido1Afiliado = '$apellido1', apellido2Afiliado = '$apellido2', fechaNacimiento = '$fn', direccionAfiliado = '$direccion', codigoCiudad = '$ciudad', telefonoAfiliado = '$telefono', movilAfiliado = '$celular', emailAfiliado = '$email' WHERE identificacionAfiliado = '$VP_cedula' ";
	}
	$res=ejecutarSQL($sql);
	saveRegister($VP_usuario, "ACTUALIZAR", "Perfil: Registro Actualizado");
	
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