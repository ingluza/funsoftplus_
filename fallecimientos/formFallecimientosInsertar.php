<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if ($VP_perfil=="Admin")
{
	$archivo            = $_FILES['acta'];
	$ident				= $_POST["ident"];
	$tipoUsuario		= $_POST["tipoUsuario"];
	$fechaFallecimiento	= $_POST["fechaFallecimiento"];
	$fechaExequias		= $_POST["fechaExequias"];
	$lugarExequias		= $_POST["lugarExequias"];
	$horaExequias		= $_POST["horaExequias"];
	$destinofinal		= $_POST["destinoFinal"];
	$hora		 		= $_POST["hora"];

	$fecha = date_create($fechaFallecimiento);
    $ff= date_format($fecha, 'Y-m-d');

    $fechaExequias = date_create($fechaExequias);
    $fe= date_format($fechaExequias, 'Y-m-d');

	$sql1="select * from fallecimientos where identificacionUsuario = '$ident'";
	$res1=ejecutarSQL($sql1);
	if(($res1->num_rows)!=0)
	{
		echo "<script language='JavaScript'>
              alert('Ya existe un registro con esa identificaci\u00f3n!');
              </script>";
	}
	else
	{
	

		if (is_uploaded_file($archivo['tmp_name'])) 
		{
			$nombreImg = $archivo["name"];
			$nombreImg = $ident.".jpg";

			move_uploaded_file($archivo['tmp_name'], "actasDefuncion/$nombreImg");

			$sql="insert into fallecimientos values (null,'$ident','$tipoUsuario','$ff','$nombreImg')";
			$res=ejecutarSQL($sql);

			$resID=ejecutarSQL("SELECT MAX(idFallecimiento) AS id FROM fallecimientos");
			if ($row = mysqli_fetch_row($resID)) 
			{
				$id = trim($row[0]);
			}

			if($tipoUsuario=='Afiliado')
			{
				$sqlInactivar="UPDATE afiliados SET estado = 0 WHERE identificacionAfiliado = '$ident' ";
			}
			else
			{
				$sqlInactivar="UPDATE beneficiarios SET estado = 0 WHERE identificacionBeneficiario = '$ident' ";
			}
			$sql2="insert into obituarios values (null, '$id','$fe','$lugarExequias','$horaExequias','$destinofinal','$hora')";
			$res=ejecutarSQL($sql2);
			$res=ejecutarSQL($sqlInactivar);
			saveRegister($VP_usuario, "INSERTAR", "Fallecimientos: Nuevo Registro");
		
			if($res)
			{
				echo "<script language='JavaScript'>
                  alert('Informaci\u00f3n guardada exitosamente!');
                  </script>";
			} 
			else
			{
				echo "<script language='JavaScript'>
                  alert('Error al guardar la informaci\u00f3n!');
                  </script>";;
			}
		}
		else
		{
			echo "<script language='JavaScript'>
                  alert('Error al guardar la imagen!');
                  </script>";
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