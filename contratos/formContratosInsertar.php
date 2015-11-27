<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if ($VP_perfil=="Admin"){
	$ident=$_POST["ident"];
	$numContrato=$_POST["numContrato"];
	$lugarExp=$_POST["lugarExp"];
	$fechaExp=$_POST["fechaExp"];
	$valCuota=$_POST["valCuota"];
	$frecuencia=$_POST["frecuencia"];
	$aPartir=$_POST["aPartir"];

	$fecha = date_create($fechaExp);
    $fe= date_format($fecha, 'Y-m-d');

	$aPartir = date_create($aPartir);
    $aP= date_format($aPartir, 'Y-m-d');


	
		$sql="insert into contrato values ('$numContrato','$ident','$fe','$lugarExp','$valCuota','$frecuencia','$aP',1)";
		$res=ejecutarSQL($sql);
		saveRegister($VP_usuario, "INSERTAR", "Contrato: Nuevo Registro");
	
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