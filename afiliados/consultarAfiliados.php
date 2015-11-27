<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") {

    $sql="SELECT * FROM  `afiliados` ORDER BY  `afiliados`.`nombreAfiliado` ASC ";

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
        </script>


<section class="content-header">
    <h1>
    	Consulta de Afiliados
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
                                    <table id="example1" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th width="20%">Identificación</th>
                                                <th width="15%">Tipo de identificación</th>
                                                <th width="40%">Nombres y apellidos</th>
                                                <th width="15%">Estado</th>
                                                <th width="10%">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $result = ejecutarSQL($sql); 
                                        saveRegister($VP_usuario, "CONSULTAR", "Afiliados: Nueva Consulta");
                                        if(($result->num_rows)!=0)
                                        {
                                            $nreg = 0;
                                            while($fila=mysqli_fetch_array($result)) 
                                            {
                                                echo "<tr>";
                                                echo "<td id=\"ident$nreg\">".$fila['identificacionAfiliado']."</td>";
                                                echo "<td>".$fila['tipoIdentificacion']."</td>";
                                                echoc ("<td>".$fila['nombreAfiliado']." ".$fila['apellido1Afiliado']." ".$fila['apellido2Afiliado']."</td>");

                                                if($fila['estado']==1)
                                                {
                                                    echo"<td><span class=\"label label-success\">Activo</span></td>";
                                                }
                                                else
                                                {
                                                    echo"<td><span class=\"label label-danger\">Inactivo</span></td>";
                                                } 
                                                echo "<td style=\"cursor:pointer\">
                                                        <span class=\"fa fa-fw fa-pencil\" data-toggle=\"tooltip\" title='Editar' alt='Editar'onclick=\"ActivarML(this.id,'ContenedorML');
                                                        loadContentP('lightContent','afiliados/actualizarAfiliado.php','ident='+devuelveValorTd('ident$nreg'));\">
                                                        </span>
                                                        <span class=\"fa fa-fw fa-users\" data-toggle=\"tooltip\" title='Agregar beneficiario' alt='Agregar beneficiario'onclick=\"ActivarML(this.id,'ContenedorML');
                                                        loadContentP('lightContent','beneficiarios/agregarBeneficiarios.php','ident='+devuelveValorTd('ident$nreg'));\">
                                                        </span>
                                                        <span class=\"fa fa-fw fa-list\" data-toggle=\"tooltip\" title='Listar beneficiarios' alt='Listar beneficiarios'onclick=\"ActivarML(this.id,'ContenedorML');
                                                        loadContentP('lightContent','beneficiarios/listarBeneficiarios.php','ident='+devuelveValorTd('ident$nreg'));\">
                                                        </span>
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