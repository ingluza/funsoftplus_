<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") {
    $fechaExp = date('m/d/Y');

?>

<script type="text/javascript">

    $(function() {
            $('#sandbox-container input').datepicker({
            
            });
            $(".timepicker").timepicker({
                    showInputs: false
            });
    });

    function validarIdentificacion()
    {
        document.getElementById('datosUsuario').style.display='block';
        if (initValue('tipoUsuario')==false)
        {
            alert('Seleccione un tipo de usuario')
        }
        else
        {
            if (initValue('ident')==false)
            {
            
                alert('Digite un número de identificación');
            }
            else
            {
                loadContentR('datosUsuario','fallecimientos/datosUsuario.php','ident='+devuelveValor('ident')+'&tipoUsuario='+devuelveValor('tipoUsuario'));
            }
        }
    }

    function borrarIdent()
    {
        document.getElementById('ident').value = '';
        if(document.getElementById('dato').value!='')
        {
            document.getElementById('datosUsuario').style.display='none';
        }
    }


    function validarFormulario()
    {
        if (initValue('fechaFallecimiento,acta,fechaExequias,lugarExequias,horaExequias,destinoFinal,hora')==true)
        {
            
            
                        document.formFall.submit();
                        setValue('ident',''); setValue('tipoUsuario','--');setValue('fechaFallecimiento','');
                        setValue('acta','');setValue('fechaExequias',''); setValue('lugarExequias','');
                        setValue('horaExequias','');setValue('destinoFinal','--'); setValue('hora','');
                        document.getElementById('datosUsuario').style.display='none';
                        document.getElementById('buttonRegistrar').disabled = true;

           
        }
        else
        {
            alert('Los campos resaltados son Obligatorios');
        }
    }

</script>

<section class="content-header">
    <h1>
    	Registro de Fallecimientos
  	</h1>
    <ol class="breadcrumb">
        <li><?= $G_cliente ?></li>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
            <br />
                <form id="formFall" name="formFall" action="fallecimientos/formFallecimientosInsertar.php" target="window_action"  method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-5">
                            <label>Tipo de usuario</label>
                                <select id="tipoUsuario" name="tipoUsuario" class="form-control" onblur="resetColor(this);" onchange="borrarIdent();">
                                    <option value="--">Seleccione...</option>
                                    <option value="Afiliado">Afiliado</option>
                                    <option value="Beneficiario">Beneficiario</option>
                                </select>
                        </div>
                        <div class="col-xs-5">
                            <label>No. de identificación</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="ident" name="ident" onkeyup="valNumero(this);" onblur="resetColor(this);validarIdentificacion();" />
                                <span class="input-group-addon"><i class="fa fa-search" style="cursor:pointer" onclick="validarIdentificacion();"></i></span>
                            </div>
                        </div>
                    </div>
                    <div  id="datosUsuario"></div>
                    <br />
                    <div class="row">
                        <div id="sandbox-container">
                            <div class="col-xs-5">
                                <label >Fecha de fallecimiento</label>
                                <input type="text" class="form-control" id="fechaFallecimiento" name="fechaFallecimiento" onkeyup="" onblur="resetColor(this);" value="<?=$fechaExp?>" />
                            </div>
                        </div>
                        <div class="col-xs-5">
                            <label >Acta de defunción</label>
                            <input type="file" class="form-control" id="acta" name="acta" onkeyup="valNumero(this);" onblur="resetColor(this);" />
                        </div>                                        
                    </div>
                    <br /><hr>
                    <div class="box-header">
                        <h3 class="box-title">Crear obituario</h3>
                    </div>
                    <div class="row">
                        <div id="sandbox-container">
                            <div class="col-xs-5">
                                <label >Fecha de exequias</label>
                                <input type="text" class="form-control" id="fechaExequias" name="fechaExequias" onkeyup="" onblur="resetColor(this);" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label >Lugar de exequias</label>
                            <input type="text" class="form-control" id="lugarExequias" name="lugarExequias" onkeyup="" onblur="resetColor(this);" />
                        </div>
                        <div class="col-xs-5">
                            <div class="bootstrap-timepicker">
                                <div class="form-group">    
                                    <label >Hora de exequías</label>
                                    <input type="text" class="form-control timepicker" id="horaExequias" name="horaExequias" onkeyup="" onblur="resetColor(this);" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-5">
                            <label >Destino final</label>
                            <input type="text" class="form-control" id="destinoFinal" name="destinoFinal" onkeyup="" onblur="resetColor(this);" />
                        </div>
                        <div class="col-xs-5">
                            <div class="bootstrap-timepicker">
                                <div class="form-group">
                                    <label>Hora</label>
                                    <input type="text" class="form-control timepicker" id="hora" name="hora" onkeyup="" onblur="resetColor(this);" />
                                </div>
                            </div>
                        </div>                                        
                    </div>
                    <br /><br />
                    <div class="box-footer">
                        <button type="button" id="buttonRegistrar" disabled="disabled" onclick="validarFormulario();" class="btn btn-primary">Registrar</button>
                        <iframe id="window_action" name="window_action" width="700" height="60" style="border:none"></iframe>
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