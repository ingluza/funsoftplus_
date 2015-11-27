<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if ($VP_perfil)
{
	$actual=$_POST["actual"];
	$actual=md5($actual);

	$sql1="select * from usuarios where identificacion = '$VP_cedula' and contrasena = '$actual'";
	$res1=ejecutarSQL($sql1);
	if(($res1->num_rows)==0)
	{
		echo "<div id=\"span\" class=\"col-xs-5\"><div class=\"alert alert-warning alert-dismissable\">
                    <i class=\"fa fa-warning\"></i>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    La contraseña que has ingresado es incorrecta.
                  </div></div>";
        ?>
		<script type="text/javascript">
        document.getElementById('buttonRegistrar').disabled = true;
        </script>
        <?php

	}
	else
	{
		?>
		<script type="text/javascript">
        document.getElementById('buttonRegistrar').disabled = false;
        </script>
        <?php
	}

	?>
	<script type="text/javascript">
	$(document).ready(function() {   
    setTimeout(function() {
        $("#span").fadeOut(100);
    },2000);
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