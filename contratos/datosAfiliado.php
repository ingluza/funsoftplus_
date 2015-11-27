<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") 
{
	$ident=$_POST["ident"];
    $sql="SELECT nombreAfiliado,apellido1Afiliado,apellido2Afiliado FROM  `afiliados` WHERE identificacionAfiliado=$ident";
    $result = ejecutarSQL($sql); 

    if(($result->num_rows)!=0)
    {
        $sql1="select * from contrato where identificacionAfiliado = '$ident'";
        $res1=ejecutarSQL($sql1);
        
        if(($res1->num_rows)!=0)
        {
            echo "<span class=\"row\"><br /><div id=\"span\" class=\"col-xs-5\"><div class=\"alert alert-warning alert-dismissable\">
                    <i class=\"fa fa-warning\"></i>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    Ya existe un contrato con la identificación digitada.
                  </div></div></span>";
            
            ?>
            <script type="text/javascript">
            setTimeout(function() { $("#span").fadeOut(100);  },1000);
            document.getElementById('buttonRegistrar').disabled = true;
            </script>
            <?php
        }
        
        else
        {
            $fila=mysqli_fetch_array($result);
            ?>
            <div class="row">
            <div class="col-xs-5">
                <label>Nombre del afiliado</label>
                <input type="text" readonly="readonly" class="form-control" value="<?=echoc($fila['nombreAfiliado'])?> <?=echoc($fila['apellido1Afiliado'])?> <?=echoc($fila['apellido2Afiliado'])?>" />
            </div>
            </div>
            <script type="text/javascript">
            document.getElementById('buttonRegistrar').disabled = false;
            </script>
            <?php
        } 
    }
    else
    {
        echo "<span class=\"row\"><br /><div id=\"span\" class=\"col-xs-5\"><div class=\"alert alert-warning alert-dismissable\">
                    <i class=\"fa fa-warning\"></i>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    El número de identificación no está registrado.
                  </div></div></span>";
        ?>
        <script type="text/javascript">
        setTimeout(function() { $("#span").fadeOut(100);  },1000);
         document.getElementById('buttonRegistrar').disabled = true;
        </script>
        <?php
    }


} else {
?>
<script type="text/javascript">
location.href='index.php';
</script>
<?php 
}
?>