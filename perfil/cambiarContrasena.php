<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";

if($VP_perfil) 
{
	$actual = $_POST["actual"];
	$nueva = $_POST["nueva1"];
	$nueva = md5($nueva);

	$sql = "UPDATE usuarios SET contrasena = '$nueva' WHERE identificacion = '$VP_cedula' ";

	$res=ejecutarSQL($sql);
	saveRegister($VP_usuario, "ACTUALIZAR", "Contraseña: Registro Actualizado");
	
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
	setTimeout("location.href='formLogin.php'",2000);
	</script> 
	<?php




} 
else {
?>
<script type="text/javascript">
location.href='error.php';
</script>
<?php 
}
?>