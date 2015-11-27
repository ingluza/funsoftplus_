<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if ($VP_perfil=="Admin")
{
	$cedula=$_POST["ident"];

	$sql1="select * from afiliados where identificacionAfiliado='$cedula'";
	$res1=ejecutarSQL($sql1);
	if(($res1->num_rows)!=0)
	{
		echo "<span class=\"row\"><br /><div id=\"span\" class=\"col-xs-5\"><div class=\"alert alert-warning alert-dismissable\">
                    <i class=\"fa fa-warning\"></i>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    Ya existe un registro con la identificación digitada.
                  </div></div></span>";
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