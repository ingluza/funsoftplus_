<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") 
{

    $sql="SELECT * FROM  `servicios`";

?>      
        
        <script type="text/javascript">
            $(function() {
                $("#example").dataTable({
                    "bSort": false,
                    "bFilter": false,
                    "bInfo": true
                });
            });

            $("[data-toggle='tooltip']").tooltip();
        </script>


<section class="content-header">
    <h1>
    	Consulta de Servicios
  	</h1>
    <ol class="breadcrumb">
        <li><?= $G_cliente ?></li>
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
                                    <table id="example" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th width="6%">Código</th>
                                                <th width="32%">Nombre</th>
                                                <th width="32%">Descripción</th>
                                                <th width="15%">Estado</th>
                                                <th width="15%">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $result = ejecutarSQL($sql);
                                        saveRegister($VP_usuario, "CONSULTAR", "Servicios: Nueva Consulta"); 
                                        if(($result->num_rows)!=0)
                                        {
                                            $nreg = 0;
                                            while($fila=mysqli_fetch_array($result)) 
                                            {
                                                echo "<tr>";
                                                echo "<td id=\"idServicio$nreg\">".$fila['idServicio']."</td>";
                                                echoc ("<td>".$fila['nombre']."</td>");
                                                echoc ("<td>".$fila['descripcion']."</td>");

                                                if($fila['estado']==1)
                                                {
                                                    echo"<td><span class=\"label label-success\">Activo</span></td>";
                                                }
                                                else
                                                {
                                                    echo"<td><span class=\"label label-danger\">Inactivo</span></td>";
                                                } 
                                                echo "<td style=\"cursor:pointer\">
                                                        <i class=\"fa fa-fw fa-pencil\" data-toggle=\"tooltip\" title='Editar' alt='Editar' onclick=\"ActivarML(this.id,'ContenedorML');
                                                        loadContentP('lightContent','servicios/actualizarServicio.php','idServicio='+devuelveValorTd('idServicio$nreg'));\">
                                                      </td></tr>";
                                                $nreg++;

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