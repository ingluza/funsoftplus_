<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if ($VP_perfil=="Admin")
{
	$idFallecimiento    =$_POST["idFallecimiento"];
	$fechaFallecimiento =$_POST["fechaFallecimiento"];

	$fecha = date_create($fechaFallecimiento);
    $ff= date_format($fecha, 'Y-m-d');

	$sql = "UPDATE fallecimientos SET fechaFallecimiento = '$ff' WHERE idFallecimiento = '$idFallecimiento' ";

	$res=ejecutarSQL($sql);
	saveRegister($VP_usuario, "ACTUALIZAR", "Fallecimientos: Registro Actualizado");
	


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
    setTimeout(function() {
        $("#span").fadeOut(100);
    },1000);
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