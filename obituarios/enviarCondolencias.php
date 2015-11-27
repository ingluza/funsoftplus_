<?php
include "../config.php";
include "../funciones.php";
$nombreFallecido = $_POST["nombreFallecido"];
$mailAfiliado=$_POST["mail"];
$fecha = date('Y-m-d');
   ?>
    <script type="text/javascript">

    $(function() {
            $('#sandbox-container input').datepicker({
        });
    });

    function validarFormulario()
    {
        if (initValue('fecha,nombreFallecido,mail,remitente,mensaje')==true)
        {
                        loadContentR('form_action','obituarios/enviarCondolenciasInsertar.php',
                        'fecha='+devuelveValor('fecha')
                        +'&nombreFallecido='+devuelveValor('nombreFallecido')
                        +'&mail='+devuelveValor('mail')
                        +'&mailAfiliado='+devuelveValor('mailAfiliado')
                        +'&remitente='+devuelveValor('remitente')
                        +'&mensaje='+devuelveValor('mensaje'));            
                       
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
                    <h3 class="box-title">Condolencias</h3>
                </div>
                <form>
                 <div class="box-body">
                    <div class="row">
                        <div class="col-xs-5">
                                <label >Fecha</label>
                                <input type="text" readonly="readonly" class="form-control" id="fecha" name="fecha" onkeyup="" onblur="resetColor(this);" value="<?=$fecha?>" />
                        </div>
                        <input type="hidden" id="mailAfiliado" value="<?=$mailAfiliado?>">
                        <div class="col-xs-5">
                            <label >Nombre del fallecido</label>
                            <input type="text" readonly="readonly" class="form-control" id="nombreFallecido" name="nombreFallecido" onkeyup="" onblur="resetColor(this);" value="<?=$nombreFallecido?>" />
                        </div>                                        
                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label >Remitente</label>
                            <input type="text" class="form-control" id="remitente" name="remitente" onkeyup="valLetra(this);" onblur="resetColor(this);" />
                        </div>
                        <div class="col-xs-5">
                            <label >Correo electrónico</label>
                            <input type="text" class="form-control" id="mail" name="mail" onkeyup="" onblur="resetColor(this);" />
                        </div>                                         
                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label >Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" onkeyup="" onblur="resetColor(this);">
                            </textarea>
                        </div>
                    </div>
                 
                    <br />
                    <div class="box-footer">
                        <button type="button" id="buttonRegistrar" onclick="validarFormulario();" class="btn btn-primary">Enviar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span id="form_action"></span> 
                    </div>
                </div>
                </form>
                            
        </div>
    </div>    		                
	</section>
