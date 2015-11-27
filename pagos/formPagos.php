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
            loadContentR('datosAfiliado','pagos/datosAfiliadoContrato.php','ident='+devuelveValor('ident'));
        }
    }


    function validarFormulario()
    {
        if (initValue('numContrato,numRecibo,fechaExp,valorPago,conceptoPago,mesPago')==true)
        {
            
                        loadContentR('form_action','pagos/formPagosInsertar.php',
                        'numContrato='+devuelveValor('numContrato')+'&numRecibo='+devuelveValor('numRecibo')
                        +'&fechaExp='+devuelveValor('fechaExp')+'&valorPago='+devuelveValor('valorPago')
                        +'&conceptoPago='+devuelveValor('conceptoPago')+'&mesPago='+devuelveValor('mesPago')); 
                        setValue('ident',''); setValue('numRecibo','');setValue('fechaExp','');
                        setValue('valorPago','');setValue('mesPago','--'); setValue('conceptoPago','');
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
    	Registro de Pagos
  	</h1>
    <ol class="breadcrumb">
        <li><?= $G_cliente ?></li>
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
                                            <label >No. Recibo</label>
                                            <input type="text" class="form-control" id="numRecibo" name="numRecibo" onkeyup="valNumero(this);" onblur="resetColor(this);" />
                                        </div>
                                        <div id="sandbox-container">
                                            <div class="col-xs-5">
                                                <label >Fecha de expedición</label>
                                                <input type="text" class="form-control" id="fechaExp" name="fechaExp" onkeyup="" onblur="resetColor(this);" value="<?=$fechaExp?>" />
                                            </div>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Valor($)</label>
                                            <input type="text" class="form-control" id="valorPago" name="valorPago" onkeyup="valNumero(this);" onblur="resetColor(this);" />
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Concepto de pago</label>
                                            <input type="text" class="form-control" id="conceptoPago" name="conceptoPago" onblur="resetColor(this);" />
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Pago correspondiente a</label>
                                            <select id="mesPago" name="mesPago" class="form-control" onblur="resetColor(this);">
                                                <option value="--">Seleccione...</option>
                                                <option value="Enero">Enero</option>
                                                <option value="Febrero">Febrero</option>
                                                <option value="Marzo">Marzo</option>
                                                <option value="Abril">Abril</option>
                                                <option value="Mayo">Mayo</option>
                                                <option value="Junio">Junio</option>
                                                <option value="Julio">Julio</option>
                                                <option value="Agosto">Agosto</option>
                                                <option value="Septiembre">Septiembre</option>
                                                <option value="Octubre">Octubre</option>
                                                <option value="Noviembre">Noviembre</option>
                                                <option value="Diciembre">Diciembre</option>
                                            </select>
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