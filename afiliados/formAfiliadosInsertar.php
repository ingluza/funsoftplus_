<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if ($VP_perfil=="Admin"){
	$cedula=$_POST["ident"];
	$tipoIdent=$_POST["tipoIdent"];
	$lugarExp=$_POST["lugarExp"];
	$nombre=$_POST["nombre"];
	$apellido1=$_POST["apellido1"];
	$apellido2=$_POST["apellido2"];
	$fechaNac=$_POST["fechaNac"];
	$telefono=$_POST["telefono"];
	$celular=$_POST["celular"];
	$direccion=$_POST["direccion"];
	$ciudad=$_POST["ciudad"];
	$email=$_POST["email"];
	$usuario=$_POST["ident"];
	$contrasena=$_POST["ident"];
	$contrasena=md5($contrasena);
	$fechaIng = date('Y-m-d');

	
		$sql="insert into afiliados values ('$cedula','$tipoIdent','$lugarExp','$nombre','$apellido1','$apellido2','$fechaNac',
			'$direccion','$ciudad','$telefono','$celular','$email','$fechaIng',1)";
		$sql2="insert into usuarios values (null,2,'$cedula','$usuario','$contrasena')";
		$res=ejecutarSQL($sql);
		$res=ejecutarSQL($sql2);
		saveRegister($VP_usuario, "INSERTAR", "afiliado: Nuevo Registro ");

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
    //setTimeout(function() { $("#tab_2").addClass("tab-pane active");  },3000);
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