<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if ($VP_perfil=="Admin")
{
	$nombreServicio      =$_POST["nombreServicio"];
	$descripcionServicio=$_POST["descripcionServicio"];

	
		$sql="insert into servicios values (null,'$nombreServicio','$descripcionServicio',1)";
		$res=ejecutarSQL($sql);
		saveRegister($VP_usuario, "INSERTAR", "Servicios: Nuevo Registro");
	
		if($res)
		{
			echo "<span class=\"row\"><br /><div class=\"col-xs-5\"><div class=\"alert alert-success alert-dismissable\">
                    <i class=\"fa fa-check\"></i>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                     Información guardada exitosamente!
                  </div></span>";
		} 
		else
		{
			echo "<span class=\"row\"><br /><div class=\"col-xs-5\"><div class=\"alert alert-danger alert-dismissable\">
                    <i class=\"fa fa-ban\"></i>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                     Error al guardar la información!
                  </div></span>";
		}
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