<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") 
{
    $identificacion = $_POST['ident'];

    $sql="SELECT p.idPago,p.valorPago,p.fechaPago,p.concepto,p.mesPago
          from contrato c 
          inner join afiliados a 
          on a.identificacionAfiliado = c.identificacionAfiliado
          inner join pagos p
          on c.idContrato = p.idContrato
          where  a.identificacionAfiliado = $identificacion";

    $sql2="SELECT c.idContrato, a.identificacionAfiliado, a.nombreAfiliado, a.apellido1Afiliado, a.apellido2Afiliado
          from contrato c 
          inner join afiliados a 
          on a.identificacionAfiliado = c.identificacionAfiliado
          where  a.identificacionAfiliado = $identificacion";
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
        </script>



                             
                                <div class="box-header">
                                    <h3 class="box-title">Pagos realizados</h3>
                                </div>
                            <div class="box box-solid">
                                <div class="box-body table-responsive">
                                    <table class="table table-condensed">
                                    <tr>
                                    <td width="50%"><label>Nombre Afiliado&nbsp;&nbsp;</label><?= $row['nombreAfiliado']?> <?= $row['apellido1Afiliado']?> <?= $row['apellido2Afiliado']?></td>
                                    <td width="50%" align="center"><label>Contrato No. &nbsp;</label><?= $row['idContrato']?></td>
                                    </tr>
                                    </table>  
                                    <br /><br />
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="20%">No. Recibo</th>
                                                <th width="20%">Fecha</th>
                                                <th width="20%">Valor</th>
                                                <th width="20%">Concepto</th>
                                                <th width="20%">Correspondiente a</th>
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
                                                echo "<td>".$fila['idPago']."</td>";
                                                echo "<td>".$fila['fechaPago']."</td>";
                                                echo "<td>$".number_format($fila['valorPago'])."</td>";
                                                echo "<td>".$fila['concepto']."</td>";
                                                echo "<td>".$fila['mesPago']."</td>";
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