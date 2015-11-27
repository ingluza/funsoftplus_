<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") 
{
    $frecuencia = $_POST['frecuencia'];

    switch($frecuencia) 
    {
        case "Semanal": 
            $sql=   "SELECT a.nombreAfiliado, a.apellido1Afiliado, a.apellido2Afiliado, p.idPago, valorPago, MAX(fechaPago) as ultimoPago, IF(DATEDIFF(NOW(),MAX(fechaPago))>15,'Atrasado','Al dia') as estado
                    FROM pagos p
                    INNER JOIN contrato c 
                    ON c.idContrato = p.idContrato
                    INNER JOIN afiliados a
                    ON c.identificacionAfiliado = a.identificacionAfiliado
                    WHERE frecuenciaPago = 'Semanal'
                    GROUP BY p.idContrato"; 
        break;
        case "Quincenal": 
            $sql=   "SELECT a.nombreAfiliado, a.apellido1Afiliado, a.apellido2Afiliado, p.idPago, valorPago, MAX(fechaPago) as ultimoPago, IF(DATEDIFF(NOW(),MAX(fechaPago))>30,'Atrasado','Al dia') as estado
                    FROM pagos p
                    INNER JOIN contrato c 
                    ON c.idContrato = p.idContrato
                    INNER JOIN afiliados a
                    ON c.identificacionAfiliado = a.identificacionAfiliado
                    WHERE frecuenciaPago = 'Quincenal'
                    GROUP BY p.idContrato"; 
        break;
        case "Mensual": 
            $sql=   "SELECT a.nombreAfiliado, a.apellido1Afiliado, a.apellido2Afiliado, p.idPago, valorPago, MAX(fechaPago) as ultimoPago, IF(DATEDIFF(NOW(),MAX(fechaPago))>60,'Atrasado','Al dia') as estado
                    FROM pagos p
                    INNER JOIN contrato c 
                    ON c.idContrato = p.idContrato
                    INNER JOIN afiliados a
                    ON c.identificacionAfiliado = a.identificacionAfiliado
                    WHERE frecuenciaPago = 'Mensual'
                    GROUP BY p.idContrato"; 
        break;
    }
    $resultado = ejecutarSQL($sql);
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
        </script>               
                                <br /><hr>
                                <div class="box box-solid">
                                    <div class="box-body table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th >Datos del afiliado</th>
                                                <th >No. Recibo </th>
                                                <th >Fecha último pago</th>
                                                <th >Valor pago</th>
                                                <th >Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $result = ejecutarSQL($sql); 
                                        saveRegister($VP_usuario, "CONSULTAR", "Control Pagos: Nueva Consulta");
                                        if(($result->num_rows)!=0)
                                        {
                                            $nreg = 0;
                                            while($fila=mysqli_fetch_array($result)) 
                                            {
                                                echo "<tr>";
                                                echoc ("<td>".$fila['nombreAfiliado']." ".$fila['apellido1Afiliado']." ".$fila['apellido2Afiliado']."</td>");
                                                echo "<td>".$fila['idPago']."</td>";
                                                echo "<td>".$fila['ultimoPago']."</td>";
                                                echo "<td>$".number_format($fila['valorPago'])."</td>";
                                                if($fila['estado']=='Al dia')
                                                {
                                                    echo"<td><span class=\"label label-success\">Al dia</span></td>";
                                                }
                                                else
                                                {
                                                    echo"<td><span class=\"label label-danger\">Atrasado</span></td>";
                                                } 
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
                                            echo "<td colspan='5'>No existen datos relacionados</td>";
                                            echo "</tr>";
                                            
                                        }


                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.box-body -->
                       

<?php
} else {
?>
<script type="text/javascript">
location.href='error.php';
</script>
<?php 
}
?>