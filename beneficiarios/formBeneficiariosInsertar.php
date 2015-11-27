<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if ($VP_perfil=="Admin")
{
	$identAfil = $_POST['identificacionAfil'];
	$identBenef = $_POST['identBenef'];
	$tipoIdent = $_POST['tipoIdentBen'];
	$nombres = $_POST['nombreBeneficiario'];
	$apellidos = $_POST['apellidosBeneficiario'];
	$nacimiento = $_POST['nacimientoBeneficiario'];
	$parentesco = $_POST['parentesco'];
	$fechaIng = date('Y-m-d');
	$nacimiento = date_create($nacimiento);
    $fn= date_format($nacimiento, 'Y-m-d');

    $sql1 = "SELECT * FROM afiliadosbeneficiarios WHERE identificacionAfiliado = $identAfil";
    $numBenef = ejecutarSQL($sql1);
    if(($numBenef->num_rows)==12)
    {
    	?>
			<script type="text/javascript">
				alert('El número de beneficiarios registrados es el máximo permitido');
			</script>
		<?php
    }
    else
    {
		$sql = "SELECT * FROM beneficiarios WHERE identificacionBeneficiario = $identBenef";
		$res = ejecutarSQL($sql);
		if(($res->num_rows)!=0)
	    {
	    	?>
			<script type="text/javascript">
				alert('El número de identificación ya está registrado');
			</script>
			<?php 
			$sqlTabla = "SELECT b.identificacionBeneficiario, b.tipoIdentificacion, b.nombreBeneficiario, b.apellidosBeneficiario, b.fechaNacimiento, p.nombreParentesco
							 FROM beneficiarios b, parentescos p, afiliadosbeneficiarios ab
							 WHERE b.identificacionBeneficiario = ab.identificacionBeneficiario
							 AND ab.codigoParentesco = p.codigoParentesco
							 AND ab.identificacionAfiliado = $identAfil";
				?>
				<hr>
				<div class="box-body table-responsive">
	            <table id="example" class="table table-hover">
	            <?php
				$resultado = ejecutarSQL($sqlTabla);
				if(($resultado->num_rows)!=0)
	            {
	                                            $nreg = 0;
	                                            while($fila=mysqli_fetch_array($resultado)) 
	                                            {
	                                                echo "<tr>";
	                                                echo "<td width=\"15%\" id=\"idServicio$nreg\">".$fila['identificacionBeneficiario']."</td>";
	                                                echo "<td width=\"15%\">".$fila['tipoIdentificacion']."</td>";
	                                                echoc ("<td width=\"20%\">".$fila['nombreBeneficiario']."</td>");
	                                                echoc ("<td width=\"20%\">".$fila['apellidosBeneficiario']."</td>");
	                                                echo "<td width=\"12%\">".$fila['fechaNacimiento']."</td>";
	                                                echoc ("<td width=\"13%\">".$fila['nombreParentesco']."</td>");	
	                                                echo "</tr>";
																				                                                
	                                                $nreg++;

	                                            }
	            }
	            ?>
	            </table>
	            </div>
	            <?php
		}
		else
		{
			$sqlinsert1 = "INSERT INTO beneficiarios values (null,'$identBenef','$tipoIdent','$nombres','$apellidos','$fn','$fechaIng',1)"; 
			$sqlinsert2 = "INSERT INTO afiliadosbeneficiarios values (null,'$identAfil','$identBenef','$parentesco')"; 
			$result = ejecutarSQL($sqlinsert1);
			$result = ejecutarSQL($sqlinsert2);
			if($result)
			{
				$sqlTabla = "SELECT b.identificacionBeneficiario, b.tipoIdentificacion, b.nombreBeneficiario, b.apellidosBeneficiario, b.fechaNacimiento, p.nombreParentesco
							 FROM beneficiarios b, parentescos p, afiliadosbeneficiarios ab
							 WHERE b.identificacionBeneficiario = ab.identificacionBeneficiario
							 AND ab.codigoParentesco = p.codigoParentesco
							 AND ab.identificacionAfiliado = $identAfil";
				?>
				<hr>
				<div class="box-body table-responsive">
	            <table id="example" class="table table-hover">
	            <?php
				$resultado = ejecutarSQL($sqlTabla);
				if(($resultado->num_rows)!=0)
	            {
	                                            $nreg = 0;
	                                            while($fila=mysqli_fetch_array($resultado)) 
	                                            {
	                                                echo "<tr>";
	                                                echo "<td width=\"15%\" id=\"idServicio$nreg\">".$fila['identificacionBeneficiario']."</td>";
	                                                echo "<td width=\"15%\">".$fila['tipoIdentificacion']."</td>";
	                                                echoc ("<td width=\"20%\">".$fila['nombreBeneficiario']."</td>");
	                                                echoc ("<td width=\"20%\">".$fila['apellidosBeneficiario']."</td>");
	                                                echo "<td width=\"12%\">".$fila['fechaNacimiento']."</td>";
	                                                echoc ("<td width=\"13%\">".$fila['nombreParentesco']."</td>");	
	                                                echo "</tr>";
																				                                                
	                                                $nreg++;

	                                            }
	            }
	            ?>
	            </table>
	            </div>
	            <?php

			}
			else
			{
				echo "<span class=\"row\"><br /><div id=\"span\" class=\"col-xs-5\"><div class=\"alert alert-danger alert-dismissable\">
	                    <i class=\"fa fa-ban\"></i>
	                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
	                     Error al guardar la información!
	                  </div></span>";
			}
		}
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