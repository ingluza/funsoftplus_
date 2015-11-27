<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") {

    $sql = "SELECT c.idContrato, c.fechaExpedicion, c.valorCuota, c.frecuenciaPago, a.identificacionAfiliado, a.nombreAfiliado,
            a.apellido1Afiliado, a.apellido2Afiliado, c.estado
            FROM contrato c, afiliados a
            WHERE a.identificacionAfiliado = c.identificacionAfiliado";

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
    	Consulta de Contratos
  	</h1>
    <ol class="breadcrumb">
        <li>Astrea Funeraria La Fe</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
                        <div class="col-md-12">
                            <div class="box box-primary">
                            <br />
                            <div class="box box-solid">
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No. de contrato</th>
                                                <th>Identificación Afiliado</th>
                                                <th>Nombres y apellidos</th>
                                                <th>Fecha expedición</th>
                                                <th>Valor cuota</th>
                                                <th>Frecuencia pago</th>
                                                <th>Estado</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $result = ejecutarSQL($sql); 
                                        saveRegister($VP_usuario, "CONSULTAR", "Contratos: Nueva Consulta");
                                        if(($result->num_rows)!=0)
                                        {
                                            $nreg = 0;
                                            while($fila=mysqli_fetch_array($result)) 
                                            {
                                                echo "<tr>";
                                                echo "<td id=\"idContrato$nreg\">".$fila['idContrato']."</td>";
                                                echo "<td id=\"ident$nreg\">".$fila['identificacionAfiliado']."</td>";
                                                echoc ("<td>".$fila['nombreAfiliado']." ".$fila['apellido1Afiliado']." ".$fila['apellido2Afiliado']."</td>");
                                                echo "<td>".$fila['fechaExpedicion']."</td>";
                                                echo "<td>$".number_format($fila['valorCuota'])."</td>";
                                                echo "<td>".$fila['frecuenciaPago']."</td>"; 

                                                if($fila['estado']==1)
                                                {
                                                    echo"<td><span class=\"label label-success\">Activo</span></td>";
                                                }
                                                else
                                                {
                                                    echo"<td><span class=\"label label-success\">Inactivo</span></td>";
                                                } 
                                                echo "<td style=\"cursor:pointer\">
                                                        <i class=\"fa fa-fw fa-pencil\" data-toggle=\"tooltip\" title='Editar' alt='Editar'>
                                                      </td></tr>";

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
                        </div><!-- /.box -->

                        
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