<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";

if($VP_perfil=="Admin") 
{
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
        Auditoría
    </h1>
    <ol class="breadcrumb">
        <li><?= $G_cliente ?></li>
    </ol>
</section>

<section class="content">
<div class="row">
                        <div class="col-md-12">
                            <div class="box box-primary">
                            <br />
                            <div class="box box-solid">

                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th width>Usuario</th>
                                                <th width>Acción</th>
                                                <th width>Comentario</th>
                                                <th width>Fecha</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql="SELECT * FROM `auditoria` ORDER BY `auditoria`.`Fecha` DESC ";
                                        $result = ejecutarSQL($sql);
                                        if(($result->num_rows)!=0)
                                        {
                                            $nreg = 0;
                                            while($fila=mysqli_fetch_array($result)) 
                                            {
                                                echo "<tr>";
                                                echo "<td>".$fila['usuario']."</td>";
                                                echo "<td>".$fila['accion']."</td>";
                                                echo "<td>".$fila['comentario']."</td>";
                                                echo "<td>".$fila['fecha']."</td>";
                                                echo "</tr>";

                                               

                                            }
                                        }
                                        else
                                        {
                                            echo "<tr>";
                                            echo "<td style=\"display:none;\"></td>";
                                            echo "<td style=\"display:none;\"></td>";
                                            echo "<td style=\"display:none;\"></td>";
                                            echo "<td colspan='4'>No existen datos relacionados</td></tr>";
                                        }


                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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

                           