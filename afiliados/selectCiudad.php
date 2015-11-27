<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") 
{
	$dptoExp=$_POST["dptoExp"];

?>
											<div class="col-xs-5">
                                            <label>&nbsp;</label>
                                             <select class="form-control" name="lugarExp" id="lugarExp" onblur="resetColor(this);" onchange="">
                                                <option value="--">Seleccione ciudad</option>
                                                 <?php
                                                $query="SELECT * FROM `ciudades` where codigoDepartamento=$dptoExp";
                                                $valueOpt="codigoCiudad";
                                                $valueShowOpt="nombreCiudad"; 
                                                cargarSelect($query, $valueOpt, $valueShowOpt, ".", ".")
                                                ?>
                                            </select>
                                            </div>
                                      
<?php
} else {
?>
<script type="text/javascript">
location.href='error.php';
</script>
<?php 
}
?>