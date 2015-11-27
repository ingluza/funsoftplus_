<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Afiliado") 
{
    

    $sql="SELECT p.idPago,p.valorPago,p.fechaPago,p.concepto,p.mesPago
          from contrato c 
          inner join afiliados a 
          on a.identificacionAfiliado = c.identificacionAfiliado
          inner join pagos p
          on c.idContrato = p.idContrato
          where  a.identificacionAfiliado = $VP_cedula";

    $sql2="SELECT c.idContrato, a.identificacionAfiliado, a.nombreAfiliado, a.apellido1Afiliado, a.apellido2Afiliado
          from contrato c 
          inner join afiliados a 
          on a.identificacionAfiliado = c.identificacionAfiliado
          where  a.identificacionAfiliado = $VP_cedula";
    $resultado = ejecutarSQL($sql2);
    $row=mysqli_fetch_array($resultado);

?>

        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable({
                    "bSort": false,
                    "bFilter": false,
                    "bInfo": true
                });
            });
            $("[data-toggle='tooltip']").tooltip();
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
                <br />
                <div class="box box-solid">
                    <div class="box-body table-responsive">
                        <table class="table table-condensed">
                            <tr>
                                <td width="50%"><label>Nombre Afiliado&nbsp;&nbsp;</label><?= $row['nombreAfiliado']?> <?= $row['apellido1Afiliado']?> <?= $row['apellido2Afiliado']?></td>
                                 <td width="50%" align="center"><label>Contrato No. &nbsp;</label><?= $row['idContrato']?></td>
                            </tr>
                        </table>  
                        <hr />
                        <table id="example1" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No. Recibo</th>
                                    <th>Fecha</th>
                                    <th>Valor</th>
                                    <th>Concepto</th>
                                    <th>Correspondiente a</th>
                                    <th>Acciones </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = ejecutarSQL($sql); 
                            saveRegister($VP_usuario, "CONSULTAR", "Pagos: Nueva Consulta");
                                        if(($result->num_rows)!=0)
                                        {
                                            $nreg = 0;
                                            while($fila=mysqli_fetch_array($result)) 
                                            {
                                                echo "<tr>";
                                                echo "<td id=\"idPago$nreg\">".$fila['idPago']."</td>";
                                                echo "<td>".$fila['fechaPago']."</td>";
                                                echo "<td>$".number_format($fila['valorPago'])."</td>";
                                                echo "<td>".$fila['concepto']."</td>";
                                                echo "<td>".$fila['mesPago']."</td>";
                                                echo "<td style=\"cursor:pointer\">
                                                        <i class=\"fa fa-fw fa-print\" data-toggle=\"tooltip\" title=\"Imprimir recibo\" alt='Imprimir recibo' onclick=\"ActivarML(this.id,'ContenedorML');
                                                        loadContentP('lightContent','fallecimientos/actualizarFallecimiento.php','idFallecimiento='+devuelveValorTd('idPago$nreg'));\">
                                                      </td>";
                                                echo "</tr>";
                                                

                                            }
                                        }
                                        else
                                        {
                                            echo "<tr>";
                                            echo "<td style=\"display:none;\"></td>";
                                            echo "<td style=\"display:none;\"></td>";
                                            echo "<td style=\"display:none;\"></td>";
                                            echo "<td style=\"display:none;\"></td>";
                                            echo "<td style=\"display:none;\"></td>";
                                            echo "<td colspan='6'>No existen datos relacionados</td>";
                                            echo "</tr>";
                                            
                                        }

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.box-body -->
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