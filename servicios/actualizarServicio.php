<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") 
{

	$idServicio = $_POST['idServicio'];
    $sql="SELECT * FROM  `servicios` WHERE idServicio = $idServicio";
    $res=ejecutarSQL($sql);
    ?>
    <script type="text/javascript">



    function validarFormulario()
    {
        if (initValue('nombreServicio')==true)
        {
            
                        loadContentR('form_action','servicios/actualizarServicioInsertar.php',
                        'idServicio='+devuelveValor('idServicio')
                        +'&nombreServicio='+devuelveValor('nombreServicio')
                        +'&descripcionServicio='+devuelveValor('descripcionServicio')
                        +'&estado='+devuelveValor('estado'));
                        setValue('nombreServicio',''); setValue('descripcionServicio','');

           
        }
        else
        {
            alert('El campo resaltado es Obligatorio');
        }
    }

	</script>

    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Actualizar datos de servicio</h3>
                </div>
                <form>
                 <div class="box-body">
                 <?php
    				while ($row=mysqli_fetch_row($res))
					{
									echo "<input type='text' id='idServicio' hidden='hidden' value='$row[0]' />";
                                    echoc ("<div class='row'>
                                        	<div class='col-xs-5'>
                                            	<label >Nombre del servicio</label>
                                            	<input type='text' value='$row[1]' class='form-control' id='nombreServicio' name='nombreServicio' onblur='resetColor(this);' >
                                            </div>
                                            <div class='col-xs-5'>
                                            	<label >&nbsp;</label>
                                            	<input type='text' hidden='hidden' />
                                        	</div>
                                           </div>");

                                    echo "<br />";

                                     echoc ("<div class='row'>
                                        	<div class='col-xs-5'>
                                            	<label >Descripci&oacute;n del servicio</label>
                                            	<input type='text' value='$row[2]' class='form-control' id='descripcionServicio' name='descripcionServicio' onblur='resetColor(this);' >
                                            </div>
                                            <div class='col-xs-5'>
                                            	<label >&nbsp;</label>
                                            	<input type='text' hidden='hidden' />
                                        	</div>
                                           </div>");

                                    echo "<br />";

                                    echo "<input type='text' id='estado' hidden='hidden'  value='$row[3]' />";

                                    if ($row[3]==1)
                                    {
                                    	echoc ("<div class='row'>
                                        	<div class='col-xs-5'>
                                            	<label>
                                            		<input type='checkbox' name='status' onchange='cambiarEstado(\"status\",\"estado\");' class='flat-red' value='0'/>
                                           				Inactivar
                                       			</label>
                                            </div>
                                           </div>");
                                    }
                                    else
                                    {
                                    	echoc ("<div class='row'>
                                        	<div class='col-xs-5'>
                                            	<label>
                                            		<input type='checkbox' name='status'  onchange='cambiarEstado(\"status\",\"estado\");' class='flat-red' value='1'/>
                                           			 Activar
                                       			</label>
                                            </div>
                                           </div>");
                                    }
                                   
                                    
                                    
                    }
                    ?>
                    <br /><br />
                    <div class="box-footer">
                        <button type="button" id="buttonRegistrar" onclick="validarFormulario();" class="btn btn-primary">Actualizar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="button" id="buttonCerrar" onclick="loadContentP('window_action','servicios/consultarServicios.php',''); document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'; document.getElementById('lightContent').style.display='none';" class="btn btn-primary">Cerrar</button>
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