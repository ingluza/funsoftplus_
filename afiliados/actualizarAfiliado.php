<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") 
{

	$identificacionAfiliado = $_POST['ident'];
    $sql="SELECT * FROM  `afiliados` WHERE identificacionAfiliado = $identificacionAfiliado";
    $res=ejecutarSQL($sql);
    ?>
    <script type="text/javascript">

    $(function() {
            $('#sandbox-container input').datepicker({
        });
    });

    function validarFormulario()
    {
        if (initValue('nombreAfiliado,apellido1Afiliado,apellido2Afiliado,fechaNac,dptoDomi,telefono,celular,direccion,email,ciudad')==true)
        {
            if(validarEmail('email')==false)
            {
                alert('La dirección de correo no es correcta.');
            }
            else
            {
                        loadContentR('form_action','afiliados/actualizarAfiliadoInsertar.php',
                        'cedula='+devuelveValor('ident')
                        +'&nombre='+devuelveValor('nombreAfiliado')
                        +'&apellido1='+devuelveValor('apellido1Afiliado')+'&apellido2='+devuelveValor('apellido2Afiliado')
                        +'&fechaNac='+devuelveValor('fechaNac')+'&telefono='+devuelveValor('telefono')
                        +'&celular='+devuelveValor('celular')+'&direccion='+devuelveValor('direccion')
                        +'&ciudad='+devuelveValor('ciudad')+'&email='+devuelveValor('email')); 
            }
        }
        else
        {
            alert('Los campos resaltados son Obligatorios');
        }
    }

	</script>

    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Actualizar datos de afiliado</h3>
                </div>
                <form>
                 <div class="box-body">
                 <?php
    				while ($row=mysqli_fetch_row($res))
					{
                        $sqlDpto="SELECT d.codigoDepartamento,d.nombreDepartamento,c.nombreCiudad FROM departamentos d, 
                        ciudades c WHERE c.codigoDepartamento=d.codigoDepartamento and c.codigoCiudad = $row[8] ";
                        $result = ejecutarSQL($sqlDpto);
                        $dpto = mysqli_fetch_row($result);
                        $fecha = date_create($row[6]);
                        $fn= date_format($fecha, 'm/d/Y');

									echo "<input type='text' id='ident' hidden='hidden' value='$row[0]' />";
                                    echoc ("<div class='row'>
                                        	<div class='col-xs-5'>
                                            	<label >Nombre</label>
                                            	<input type='text' value='$row[3]' class='form-control' id='nombreAfiliado' name='nombreAfiliado' onblur='resetColor(this);' onkeyup='valLetra(this);' >
                                            </div>
                                            <div class='col-xs-5'>
                                            	<label >Primer apellido</label>
                                            	<input type='text' value='$row[4]' class='form-control' id='apellido1Afiliado' name='apellido2Afiliado' onblur='resetColor(this);' onkeyup='valLetra(this);'  />
                                        	</div>
                                        	<div class='col-xs-5'>
                                            	<label >Segundo apellido</label>
                                            	<input type='text' value='$row[5]' class='form-control' id='apellido2Afiliado' name='apellido2Afiliado' onblur='resetColor(this);' onkeyup='valLetra(this);' >
                                            </div>
                                            <div class='col-xs-5'>
                                                <label >Departamento de domicilio</label>
                                                <select class='form-control' name='dptoDomi' id='dptoDomi' onblur='resetColor(this);' onchange=\"loadContentR('contCiudad','afiliados/selectCiudad1.php','dptoDomi='+devuelveValor('dptoDomi'));\">
                                                    <option value='$dpto[0]'>$dpto[1]</option>");

                                                    $query="SELECT * FROM `departamentos`";
                                                    $valueOpt="codigoDepartamento";
                                                    $valueShowOpt="nombreDepartamento"; 
                                                    cargarSelect($query, $valueOpt, $valueShowOpt, ".", ".");
                                            echo "</select>
                                                  </div>";
                                            echoc ("<div class='col-xs-5' id='contCiudad'>
                                                <label >Ciudad de domicilio</label>
                                                <select class='form-control' name='ciudad' id='ciudad' onblur='resetColor(this);'>
                                                    <option value='$row[8]'>$dpto[2]</option>");

                                                    $query2="SELECT * FROM `ciudades` WHERE codigoDepartamento=$dpto[0]";
                                                    $valueOpt="codigoCiudad";
                                                    $valueShowOpt="nombreCiudad"; 
                                                    cargarSelect($query2, $valueOpt, $valueShowOpt, ".", ".");
                                            echo "</select>";
                                            echoc ("</div>
                                            <div class='col-xs-5'>
                                                <label >Direcci&oacute;n</label>
                                                <input type='text' value='$row[7]' class='form-control' id='direccion' name='direccion' onblur='resetColor(this);' >
                                            </div>
                                            <div class='col-xs-5'>
                                                <label >Tel&eacute;fono</label>
                                                <input type='text' value='$row[9]' class='form-control' id='telefono' name='telefono' onblur='resetColor(this);' onkeyup='valNumero(this);' >
                                            </div>
                                            <div id='sandbox-container'>
                                            <div class='col-xs-5'>
                                                <label >Fecha de nacimiento</label>
                                                <input type='text' value='$fn' class='form-control' id='fechaNac' name='fechaNac' onblur='resetColor(this);' >
                                            </div>
                                            </div>
                                            <div class='col-xs-5'>
                                                <label >Celular</label>
                                                <input type='text' value='$row[10]' class='form-control' id='celular' name='celular' onblur='resetColor(this);' onkeyup='valNumero(this);' >
                                            </div>
                                            <div class='col-xs-5'>
                                                <label >Correo electr&oacute;nico</label>
                                                <input type='text' value='$row[11]' class='form-control' id='email' name='email' onblur='resetColor(this);' >
                                            </div>
                                           </div>");
                                   
                                   
                                    
                                    
                    }
                    ?>
                    <br />
                    <div class="box-footer">
                        <button type="button" id="buttonRegistrar" onclick="validarFormulario();" class="btn btn-primary">Actualizar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span id="form_action"></span> 
                    </div>
                </div>
                </form>
                            
        </div>
    </div>    		                
	</section>

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