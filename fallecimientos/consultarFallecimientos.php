<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") 
{

    $sql="SELECT * FROM  fallecimientos";

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
    	Consulta de Fallecimientos
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
                                                <th style="display:none;">Id del fallecimiento</th>
                                                <th style="display:none;">Id del fallecido</th>
                                                <th >Nombre del fallecido</th>
                                                <th >Tipo de usuario</th>
                                                <th >Fecha de fallecimiento</th>
                                                <th >Acta de defunción</th>
                                                <th >Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $result = ejecutarSQL($sql);
                                        saveRegister($VP_usuario, "CONSULTAR", "Fallecimientos: Nueva Consulta"); 
                                        if(($result->num_rows)!=0)
                                        {
                                            $nreg = 0;
                                            while($fila=mysqli_fetch_array($result)) 
                                            {
                                                echo "<tr>";
                                                echo "<td style=\"display:none;\" id=\"idFallecimiento$nreg\">".$fila['idFallecimiento']."</td>";
                                                echo "<td style=\"display:none;\" id=\"identificacionUsuario$nreg\">".$fila['identificacionUsuario']."</td>";
                                                if($fila['tipoUsuario']=='Afiliado')
                                                {
                                                    $res =ejecutarSQL("SELECT nombreAfiliado, apellido1Afiliado, apellido2Afiliado FROM afiliados WHERE identificacionAfiliado =".$fila['identificacionUsuario']);
                                                    $row=mysqli_fetch_row($res);
                                                    echoc ("<td>".$row[0]." ".$row[1]." ".$row[2]."</td>");
                                                }
                                                else
                                                {
                                                    $res =ejecutarSQL("SELECT nombreBeneficiario, apellidosBeneficiario FROM beneficiarios WHERE identificacionBeneficiario =".$fila['identificacionUsuario']);
                                                    $row=mysqli_fetch_row($res);
                                                    echoc ("<td>".$row[0]." ".$row[1]."</td>");
                                                }
                                                
                                                echo "<td>".$fila['tipoUsuario']."</td>";
                                                echo "<td>".$fila['fechaFallecimiento']."</td>";
                                                echo "<td style=\"cursor:pointer\">
                                                        <i class=\"fa fa-fw fa-picture-o\" data-toggle=\"tooltip\" title='Ver acta' alt='Ver acta' onclick=\"javascript:window.open('fallecimientos/actasDefuncion/".$fila['identificacionUsuario'].".jpg','_blank')\">
                                                      </td>";
                                        
                                                echo "<td style=\"cursor:pointer\">
                                                        <i class=\"fa fa-fw fa-pencil\" data-toggle=\"tooltip\" title=\"Editar\" alt='Editar' onclick=\"ActivarML(this.id,'ContenedorML');
                                                        loadContentP('lightContent','fallecimientos/actualizarFallecimiento.php','idFallecimiento='+devuelveValorTd('idFallecimiento$nreg'));\">
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
                                            echo "<td colspan='7'>No existen datos relacionados</td>";
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