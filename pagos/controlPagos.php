<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") {

?>

        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable({
                    "bSort": false,
                    "bFilter": true,
                    "bInfo": true
                });
            });

            $("[data-toggle='tooltip']").tooltip();

        function validarFormulario()
        {
            if (initValue('frecuencia')==false)
            {
            
                alert('Seleccione una frecuencia de pago');
            }
             else
            {
            loadContentP('tablaPagos','pagos/tblControlPagos.php','frecuencia='+devuelveValor('frecuencia'));
            }
        }
        </script>


<section class="content-header">
    <h1>
    	Control de Pagos
  	</h1>
    <ol class="breadcrumb">
        <li><?= $G_cliente ?></li>
    </ol>
</section>
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
                            <label>Frecuencia de Pago</label>
                            <select id="frecuencia" name="frecuencia" class="form-control" onblur="resetColor(this);">
                                <option value="--">Seleccione...</option>
                                <option value="Semanal">Semanal</option>
                                <option value="Quincenal">Quincenal </option>
                                <option value="Mensual">Mensual</option>
                            </select>
                            <br /><br />
                            <div class="box-footer">
                                <button type="button" id="buttonRegistrar" onclick="validarFormulario();" class="btn btn-primary">Consultar</button>
                            </div>
                        </div>
                    </div>
                    <div  id="tablaPagos"></div>
                
                </form>
            </div>
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