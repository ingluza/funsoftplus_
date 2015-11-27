<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if ($VP_perfil=="Admin")
{
	$numContrato	= $_POST["numContrato"];
	$numRecibo		= $_POST["numRecibo"];
	$fechaExp		= $_POST["fechaExp"];
	$valorPago		= $_POST["valorPago"];
	$conceptoPago	= $_POST["conceptoPago"];
	$mesPago		= $_POST["mesPago"];

	
	
		$sql="insert into pagos values ('$numRecibo','$numContrato','$valorPago','$fechaExp','$conceptoPago','$mesPago')";
		$res=ejecutarSQL($sql);
		saveRegister($VP_usuario, "INSERTAR", "Pagos: Nuevo Registro");
	
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