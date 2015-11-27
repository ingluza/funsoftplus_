<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") 
{

    $sql="SELECT o.idObituario, o.fechaExequias, o.lugarExequias, o.horaExequias, o.destinoFinal, o.hora, f.identificacionUsuario, f.tipoUsuario
          FROM  obituarios o, fallecimientos f
          WHERE f.idFallecimiento = o.idFallecimiento ";

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
    	Consulta de Obituarios
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
                                                <th style="display:none;">Id</th>
                                                <th >Nombre del fallecido</th>
                                                <th >Fecha exequias</th>
                                                <th >Lugar exequias</th>
                                                <th >Hora exequias</th>
                                                <th >Destino final</th>
                                                <th >Hora</th>
                                                <th >Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $result = ejecutarSQL($sql);
                                        saveRegister($VP_usuario, "CONSULTAR", "Obituarios: Nueva Consulta"); 
                                        if(($result->num_rows)!=0)
                                        {
                                            $nreg = 0;
                                            while($fila=mysqli_fetch_array($result)) 
                                            {
                                                echo "<tr>";
                                                echo "<td style=\"display:none;\" id=\"idObituario$nreg\">".$fila['idObituario']."</td>";
                                                if($fila['tipoUsuario']=='Afiliado')
                                                {
                                                    $res =ejecutarSQL("SELECT nombreAfiliado, apellido1Afiliado, apellido2Afiliado FROM afiliados WHERE identificacionAfiliado =".$fila['identificacionUsuario']);
                                                    $nombre=mysqli_fetch_row($res);
                                                    echoc ("<td>".$nombre[0]." ".$nombre[1]." ".$nombre[2]."</td>");
                                                }
                                                else
                                                {
                                                    $res =ejecutarSQL("SELECT nombreBeneficiario, apellidosBeneficiario FROM beneficiarios WHERE identificacionBeneficiario =".$fila['identificacionUsuario']);
                                                    $nombre=mysqli_fetch_row($res);
                                                    echoc ("<td>".$nombre[0]." ".$nombre[1]."</td>");
                                                }
                                                
                                                echo "<td>".$fila['fechaExequias']."</td>";
                                                echoc ("<td>".$fila['lugarExequias']."</td>");
                                                echo "<td>".$fila['horaExequias']."</td>";
                                                echoc ("<td>".$fila['destinoFinal']."</td>");
                                                echo "<td>".$fila['hora']."</td>";

                                        
                                                echo "<td style=\"cursor:pointer\">
                                                        <i class=\"fa fa-fw fa-pencil\" data-toggle=\"tooltip\" title='Editar' alt='Editar' onclick=\"ActivarML(this.id,'ContenedorML');
                                                        loadContentP('lightContent','obituarios/actualizarObituario.php','idObituario='+devuelveValorTd('idObituario$nreg'));\">
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
                                            echo "<td colspan='5'>No existen datos relacionados</td>";
                                            echo "</tr>";
                                        }


                                        ?>
                                        </tbody>
                                    </table>                                    
                                </div>
                            </div>
                            <?php
                                        $result = ejecutarSQL($sql); 
                                        if(($result->num_rows)!=0)
                                        {
                                            $nreg = 0;
                                            while($fila=mysqli_fetch_array($result)) 
                                            {
                                                if($fila['tipoUsuario']=='Afiliado')
                                                {
                                                    $res =ejecutarSQL("SELECT nombreAfiliado, apellido1Afiliado, apellido2Afiliado FROM afiliados WHERE identificacionAfiliado =".$fila['identificacionUsuario']);
                                                    $nombre=mysqli_fetch_row($res);
                                                    //echoc ("<td>".$nombre[0]." ".$nombre[1]." ".$nombre[2]."</td>");
                                                }
                                                else
                                                {
                                                    $res =ejecutarSQL("SELECT nombreBeneficiario, apellidosBeneficiario FROM beneficiarios WHERE identificacionBeneficiario =".$fila['identificacionUsuario']);
                                                    $nombre=mysqli_fetch_row($res);
                                                    //echoc ("<td>".$nombre[0]." ".$nombre[1]."</td>");
                                                }
                                            ?>
                                            <div class="col-md-4">
                                                <!-- Default box -->
                                                <div class="box">
                                                    <div class="box-header">
                                                        <h3 class="box-title"><?=$nombre[0]?> <?=$nombre[1]?> <?=$nombre[2]?></h3>
                                                    </div>
                                                    <div class="box-body">
                                                        Descansó en la paz del Señor
                                                        <br /><dt><?=$fila['fechaExequias']?></dt>
                                                        <b>Exequias: </b><?=echoc($fila['lugarExequias'])?>
                                                        <br />
                                                        <b>Hora: </b><?=$fila['horaExequias']?>
                                                        <br />
                                                        <b>Destino final: </b><?=$fila['destinoFinal']?>
                                                        <br />
                                                        <b>Hora: </b><?=$fila['hora']?>
                                                    </div><!-- /.box-body -->
                                                    <div class="box-footer">
                                                    <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Enviar condolencias"><i class="fa fa-fw fa-heart"></i></button>
                                                    </div><!-- /.box-footer-->
                                                </div><!-- /.box -->
                                            </div><!-- /.col -->
                                            <?php
                                                
                                                

                                            }
                                        }
                                      


                                        ?>
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