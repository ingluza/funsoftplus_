<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") 
{
	$ident=$_POST["ident"];
    

    $sql="SELECT a.nombreAfiliado,a.apellido1Afiliado,a.apellido2Afiliado,c.idContrato,c.valorCuota 
          FROM  afiliados a, contrato c 
          WHERE a.identificacionAfiliado=$ident
          AND a.identificacionAfiliado = c.identificacionAfiliado";
    $result = ejecutarSQL($sql); 
    if(($result->num_rows)!=0)
    {
        $fila=mysqli_fetch_array($result);
        ?>
        <br>
        <div class="row">
        <div class="col-xs-5">
            <label>No. Contrato</label>
            <input type="text" readonly="readonly" class="form-control" value="<?=$fila['idContrato']?>" />
            <input type="text" hidden="hidden" id="numContrato" value="<?=$fila['idContrato']?>" />
            <input type="text" hidden="hidden" id="cuota" value="<?=$fila['valorCuota']?>" />
        </div>
        <div class="col-xs-5">
            <label>Nombre del afiliado</label>
            <input type="text" readonly="readonly" class="form-control" value="<?=echoc($fila['nombreAfiliado']);?> <?=$fila['apellido1Afiliado']?> <?=$fila['apellido2Afiliado']?>" />
        </div>
        </div>
        <script type="text/javascript">
        document.getElementById('buttonRegistrar').disabled = false;
        var cuota = document.getElementById('cuota').value;
        document.getElementById('valorPago').value = cuota;
        </script>
        <?php 
    }
    else
    {
        echo "<span class=\"row\"><br /><div id=\"span\" class=\"col-xs-5\"><div class=\"alert alert-danger alert-dismissable\">
                    <i class=\"fa fa-ban\"></i>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                     La consulta no arrojo resultados. Verifique los datos!
                  </div></span>";
        ?>
        <script type="text/javascript">
        document.getElementById('buttonRegistrar').disabled = true;
        </script>
        <?php
    }
    ?>
    <script type="text/javascript">
    $(document).ready(function() {   
    setTimeout(function() { $("#span").fadeOut(100);  },1000);
    });
    </script> 
    <?php


} else {
?>
<script type="text/javascript">
location.href='error.php';
</script>
<?php 
}
?>