<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") 
{

	$idObituario = $_POST['idObituario'];
    $sql="SELECT * FROM  `obituarios` WHERE idObituario = $idObituario";
    $res=ejecutarSQL($sql);
    ?>
    <script type="text/javascript">

    $(function() {
            $('#sandbox-container input').datepicker({
            
            });
            $(".timepicker").timepicker({
                    showInputs: false
            });
    });

    function validarFormulario()
    {
        if (initValue('fechaExequias,lugarExequias,horaExequias,destinoFinal,hora')==true)
        {
                        loadContentR('form_action','obituarios/actualizarObituarioInsertar.php',
                        'idObituario='+devuelveValor('idObituario')
                        +'&fechaExequias='+devuelveValor('fechaExequias')
                        +'&lugarExequias='+devuelveValor('lugarExequias')
                        +'&horaExequias='+devuelveValor('horaExequias')
                        +'&destinoFinal='+devuelveValor('destinoFinal')
                        +'&hora='+devuelveValor('hora'));            
            
            

           
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
                    <h3 class="box-title">Actualizar datos de obituario</h3>
                </div>
                <form>
                 <div class="box-body">
                 <?php
    				while ($row=mysqli_fetch_row($res))
					{
                                    $fecha = date_create($row[2]);
                                    $fe= date_format($fecha, 'm/d/Y');

									echo "<input type='text' id='idObituario' hidden='hidden' value='$row[0]' />";
                                    echoc ("<div class='row'>
                                        	<div class='col-xs-5'>
                                                <div id='sandbox-container'>
                                            	   <label >Fecha exequias</label>
                                            	   <input type='text' value='$fe' class='form-control' id='fechaExequias' name='fechaExequias' onblur='resetColor(this);'  >
                                                </div>
                                            </div>
                                            </div>
                                            <div class='row'>
                                            <div class='col-xs-5'>
                                            	<label >Lugar exequias</label>
                                            	<input type='text' value='$row[3]' class='form-control' id='lugarExequias' name='lugarExequias' onblur='resetColor(this);' />
                                        	</div>
                                        	<div class='col-xs-5'>
                                                <div class='bootstrap-timepicker'>
                                                    <div class='form-group'>
                                                        <label>Hora exequias</label>
                                                        <input type='text' value='$row[4]' class='form-control timepicker' id='horaExequias' name='horaExequias' onkeyup='' onblur='resetColor(this);' />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='col-xs-5'>
                                            	<label >Destino final</label>
                                            	<input type='text' value='$row[5]' class='form-control' id='destinoFinal' name='destinoFinal' onblur='resetColor(this);' >
                                        	</div>
                                            <div class='col-xs-5'>
                                                <div class='bootstrap-timepicker'>
                                                    <div class='form-group'>
                                                        <label>Hora</label>
                                                        <input type='text' value='$row[6]' class='form-control timepicker' id='hora' name='hora' onkeyup='' onblur='resetColor(this);' />
                                                    </div>
                                                </div>
                                            </div>  
                                           </div>");
                                   
                                   
                                    
                                    
                    }
                    ?>
                    <br />
                    <div class="box-footer">
                        <button type="button" id="buttonRegistrar" onclick="validarFormulario();" class="btn btn-primary">Actualizar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="button" id="buttonCerrar" onclick="loadContentP('window_action','obituarios/consultarObituarios.php',''); document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'; document.getElementById('lightContent').style.display='none';" class="btn btn-primary">Cerrar</button>
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