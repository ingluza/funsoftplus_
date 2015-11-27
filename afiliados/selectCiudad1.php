<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil) 
{
    $dptoDomi=$_POST["dptoDomi"];

?>
                                            <label>Ciudad de domicilio</label>
                                             <select class="form-control" name="ciudad" id="ciudad" onblur="resetColor(this);" onchange="">
                                                <option value="--">Seleccione ciudad</option>
                                                 <?php
                                                $query="SELECT * FROM `ciudades` where codigoDepartamento=$dptoDomi";
                                                $valueOpt="codigoCiudad";
                                                $valueShowOpt="nombreCiudad"; 
                                                cargarSelect($query, $valueOpt, $valueShowOpt, ".", ".")
                                                ?>
                                            </select>
                                      
<?php
} else {
?>
<script type="text/javascript">
location.href='error.php';
</script>
<?php 
}
?>