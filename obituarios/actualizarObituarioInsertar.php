<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if ($VP_perfil=="Admin")
{
	$idObituario   =$_POST["idObituario"];
	$fechaExequias =$_POST["fechaExequias"];
	$lugarExequias =$_POST["lugarExequias"];
	$horaExequias  =$_POST["horaExequias"];
	$destinoFinal  =$_POST["destinoFinal"];
	$hora 		   =$_POST["hora"];	

	$fechaExequias = date_create($fechaExequias);
    $fe= date_format($fechaExequias, 'Y-m-d');

	$sql = "UPDATE obituarios SET fechaExequias = '$fe', lugarExequias = '$lugarExequias',
			horaExequias = '$horaExequias', destinoFinal = '$destinoFinal', hora = '$hora' WHERE idObituario = '$idObituario' ";

	$res=ejecutarSQL($sql);
	saveRegister($VP_usuario, "ACTUALIZAR", "Afiliados: Registro Actualizado");
	
		if($res)
		{
			echo "<span class=\"row\"><br /><div id=\"span\" class=\"col-xs-5\"><div class=\"alert alert-success alert-dismissable\">
                    <i class=\"fa fa-check\"></i>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                     Información actualizada exitosamente!
                  </div></span>";
		} 
		else
		{
			echo "<span class=\"row\"><br /><div id=\"span\" class=\"col-xs-5\"><div class=\"alert alert-danger alert-dismissable\">
                    <i class=\"fa fa-ban\"></i>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                     Error al actualizar la información!
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