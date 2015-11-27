<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Afiliado") {

    $sql="SELECT b.identificacionBeneficiario, b.tipoIdentificacion, b.nombreBeneficiario, b.apellidosBeneficiario, 
                 b.fechaNacimiento, b.estado, p.nombreParentesco 
          FROM  `beneficiarios` b
          INNER JOIN afiliadosbeneficiarios ab
          ON b.identificacionBeneficiario = ab.identificacionBeneficiario
          INNER JOIN parentescos p
          ON ab.codigoParentesco = p.codigoParentesco
          AND ab.identificacionAfiliado = $VP_cedula";

?>

        <script type="text/javascript">
            $(function() {
                $("#example2").dataTable({
                    "bSort": false,
                    "bFilter": true,
                    "bInfo": false,
                    "iDisplayLength": 10
                });
            });

            $("[data-toggle='tooltip']").tooltip();
        </script>


<section class="content-header">
    <h1>
        Listado de Beneficiarios
    </h1>
    <ol class="breadcrumb">
        <li><?= $G_cliente ?></li>
    </ol>
</section>
                        
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                 <div class="box-body table-responsive">
                    <table id="example2" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Identificación</th>
                            <th>Tipo de identificación</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Fecha Nacimiento</th>
                            <th>Parentesco</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                                $result = ejecutarSQL($sql); 
                                                saveRegister($VP_usuario, "CONSULTAR", "Beneficiarios: Nueva Consulta");
                                                if(($result->num_rows)!=0)
                                                {
                                                    $nreg = 0;
                                                    while($fila=mysqli_fetch_array($result)) 
                                                    {
                                                        echo "<tr>";
                                                        echo "<td id=\"ident$nreg\">".$fila['identificacionBeneficiario']."</td>";
                                                        echo "<td>".$fila['tipoIdentificacion']."</td>";
                                                        echoc ("<td>".$fila['nombreBeneficiario']."</td>");
                                                        echoc ("<td>".$fila['apellidosBeneficiario']."</td>");
                                                        echo "<td>".$fila['fechaNacimiento']."</td>";
                                                        echoc ("<td>".$fila['nombreParentesco']."</td>");
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
                                                        loadContentP('lightContent','','ident='+devuelveValorTd('ident$nreg'));\">
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
                                                    echo "<td style=\"display:none;\"></td>";
                                                    echo "<td style=\"display:none;\"></td>";
                                                    echo "<td style=\"display:none;\"></td>";
                                                    echo "<td colspan='8'>No existen datos relacionados</td>";
                                                    echo "</tr>";
                                                }


                                                ?>

                    </tbody>
                    </table>
                    </div>
                    </div>
                </div>
                </form>
                            
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