<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") 
{

	$idFallecimiento = $_POST['idFallecimiento'];
    $sql="SELECT * FROM  `fallecimientos` WHERE idFallecimiento = $idFallecimiento";
    $res=ejecutarSQL($sql);
    ?>
    <script type="text/javascript">

    $(function() {
            $('#sandbox-container input').datepicker({
        });
    });

    function validarFormulario()
    {
        if (initValue('fechaFallecimiento')==true)
        {
                        loadContentR('form_action','fallecimientos/actualizarFallecimientoInsertar.php',
                        'idFallecimiento='+devuelveValor('idFallecimiento')
                        +'&fechaFallecimiento='+devuelveValor('fechaFallecimiento'));            
            
            

           
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
                    <h3 class="box-title">Actualizar datos de fallecimiento</h3>
                </div>
                <form>
                 <div class="box-body">
                 <?php
    				while ($row=mysqli_fetch_row($res))
					{
                                    echo "<input type='text' id='idFallecimiento' hidden='hidden' value='$row[0]' />";

                                    if($row[2]=='Afiliado')
                                    
                                    {
                                        $result =ejecutarSQL("SELECT nombreAfiliado, apellido1Afiliado, apellido2Afiliado FROM afiliados WHERE identificacionAfiliado =".$row[1]);
                                        $nombre=mysqli_fetch_row($result);
                                        echoc ("<div class='row'>
                                            <div class='col-xs-5'>
                                                <label >Nombre del fallecido</label>
                                                <input type='text' value='$nombre[0] $nombre[1] $nombre[2]' disabled='disabled' class='form-control' id='nombre' name='nombre' onblur='resetColor(this);'  >
                                            </div>
                                            </div>");
                                                    
                                    }
                                    else
                                    {
                                        $result =ejecutarSQL("SELECT nombreBeneficiario, apellidosBeneficiario FROM beneficiarios WHERE identificacionBeneficiario =".$row[1]);
                                        $nombre=mysqli_fetch_row($result);
                                        echoc ("<div class='row'>
                                            <div class='col-xs-5'>
                                                <label >Nombre del fallecido</label>
                                                <input type='text' value='$nombre[0] $nombre[1]' disabled='disabled' class='form-control' id='nombre' name='nombre' onblur='resetColor(this);'  >
                                            </div>
                                            </div>");
                                    }

                                    $fecha = date_create($row[3]);
                                    $ff= date_format($fecha, 'm/d/Y');

									                                 
                                    echo    "<div class='row'>
                                            <div id='sandbox-container'>
                                            <div class='col-xs-5'>
                                            	<label >Fecha de fallecimiento</label>
                                            	<input type='text' value='$ff' class='form-control' id='fechaFallecimiento' name='fechaFallecimiento' onblur='resetColor(this);' />
                                        	</div>
                                            </div>
                                            </div>";
                                   
                                   
                                    
                                    
                    }
                    ?>
                    <br />
                    <div class="box-footer">
                        <button type="button" id="buttonRegistrar" onclick="validarFormulario();" class="btn btn-primary">Actualizar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="button" id="buttonCerrar" onclick="loadContentP('window_action','fallecimientos/consultarFallecimientos.php',''); document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'; document.getElementById('lightContent').style.display='none';" class="btn btn-primary">Cerrar</button>
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