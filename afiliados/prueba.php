<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if ($VP_perfil=="Admin")
{
	echo "<span class=\"row\"><br /><div class=\"col-xs-5\"><div class=\"alert alert-danger alert-dismissable\">
                    <i class=\"fa fa-ban\"></i>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                     Información guardada exitosamente!
                  </div></div></span>";

    echo "<span class=\"row\"><br /><div class=\"col-xs-5\"><div class=\"alert alert-warning alert-dismissable\">
                    <i class=\"fa fa-warning\"></i>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    Ya existe un registro con la identificación digitada.
                  </div></div></span>";

    echo "<span class=\"row\"><br /><div class=\"col-xs-5\"><div class=\"alert alert-success alert-dismissable\">
                    <i class=\"fa fa-check\"></i>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                     Información guardada exitosamente!
                  </div></span>";

}
else 
{
	?>
	<script type="text/javascript">
	//	location.href='index.php';
	</script>
	<?php 
}
?>	