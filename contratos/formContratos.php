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
    });



    function validarIdentificacion()
    {
        if (initValue('ident')==false)
        {
            
            alert('Digite un número de identificación');
        }
        else
        {
            loadContentR('datosAfiliado','contratos/datosAfiliado.php','ident='+devuelveValor('ident'));
        }
    }


    function validarFormulario()
    {
        if (initValue('ident,numContrato,fechaExp,dptoExp,lugarExp,valCuota,frecuencia,aPartir')==true)
        {
            
                        loadContentR('form_action','contratos/formContratosInsertar.php',
                        'ident='+devuelveValor('ident')+'&numContrato='+devuelveValor('numContrato')
                        +'&lugarExp='+devuelveValor('lugarExp')+'&fechaExp='+devuelveValor('fechaExp')
                        +'&valCuota='+devuelveValor('valCuota')+'&frecuencia='+devuelveValor('frecuencia')
                        +'&aPartir='+devuelveValor('aPartir')); setValue('ident',''); setValue('dptoExp','--'); 
                        setValue('lugarExp','--'); setValue('numContrato','');setValue('fechaExp','');
                        setValue('valCuota','');setValue('frecuencia','--'); setValue('aPartir','');
                        document.getElementById('datosAfiliado').style.display='none';
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
    	Registro de Contratos
  	</h1>
    <ol class="breadcrumb">
        <li><?= $G_cliente ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"></h3>
                </div>
                <form>
                 <div class="box-body">
                    <div class="row">
                        <div class="col-xs-5">
                                <label>No. de identificación del afiliado</label>
                                <div class="input-group">
                                <input type="text" class="form-control" id="ident" name="ident" onkeyup="valNumero(this);" onblur="resetColor(this);validarIdentificacion();" />
                                <span class="input-group-addon"><i class="fa fa-search" style="cursor:pointer" onclick="validarIdentificacion();"></i></span>
                            </div>
                        </div>
                        
                    </div>
                    <div  id="datosAfiliado"></div>
                    <br /><hr>
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <label >No. Contrato</label>
                                            <input type="text" class="form-control" id="numContrato" name="numContrato" onkeyup="valNumero(this);" onblur="resetColor(this);" />
                                        </div>
                                        <div id="sandbox-container">
                                            <div class="col-xs-5">
                                                <label >Fecha de expedición</label>
                                                <input type="text" class="form-control" id="fechaExp" name="fechaExp" onkeyup="" onblur="resetColor(this);" value="<?=$fechaExp?>" />
                                            </div>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Lugar de expedición</label>
                                             <select class="form-control" name="dptoExp" id="dptoExp" onblur="resetColor(this);" onchange="loadContentR('contCiudad','contratos/selectCiudad.php','dptoExp='+devuelveValor('dptoExp'));">
                                                <option value="--">Seleccione departamento</option>
                                                 <?php
                                                $query="SELECT * FROM `departamentos`";
                                                $valueOpt="codigoDepartamento";
                                                $valueShowOpt="nombreDepartamento"; 
                                                cargarSelect($query, $valueOpt, $valueShowOpt, ".", ".")
                                                ?>
                                            </select>
                                        </div>
                                        
                                        <div id="contCiudad" class="col-xs-5">
                                            <label >&nbsp;</label>
                                            <select class="form-control" disabled="disabled">
                                                <option value="--">Seleccione ciudad</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Valor de cuota($)</label>
                                            <input type="text" class="form-control" id="valCuota" name="valCuota" onkeyup="valNumero(this);" onblur="resetColor(this);" />
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Frecuencia de pago</label>
                                            <select class="form-control" name="frecuencia" id="frecuencia" onblur="resetColor(this);">
                                                <option value="--">Seleccione</option>
                                                <option value="Semanal">Semanal</option>
                                                <option value="Quincenal">Quincenal</option>
                                                <option value="Mensual">Mensual</option>
                                            </select>
                                        </div>
                                        <div id="sandbox-container">
                                                <div class="col-xs-5" id="datepicker">
                                                    <label >A partir de</label>
                                                    <input type="text" class="form-control" id="aPartir" name="aPartir" onblur="resetColor(this);" />
                                                </div>
                                        </div>
                                    </div>

                    <br /><br />
                    <div class="box-footer">
                        <button type="button" id="buttonRegistrar" disabled="disabled" onclick="validarFormulario();" class="btn btn-primary">Registrar</button>
                        <span id="form_action"></span> 
                    </div>
                </div>
                </form>
                            
        </div>
    </div>
                    
</section>

<?php
} else {
?>
<script type="text/javascript">
location.href='error.php';
</script>
<?php 
}
?>