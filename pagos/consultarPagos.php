<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") {
    $fechaExp = date('Y-m-d');

?>
<script type="text/javascript">

    function validarIdentificacion()
    {
        if (initValue('ident')==false)
        {
            
            alert('Digite un número de identificación');
        }
        else
        {
            loadContentP('tablaPagos','pagos/tblPagosAfiliado.php','ident='+devuelveValor('ident'));
        }
    }

</script>

<section class="content-header">
    <h1>
    	Consulta de Pagos
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
                    
                    <br /><hr>
                    <div  id="tablaPagos"></div>

            </div>                
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