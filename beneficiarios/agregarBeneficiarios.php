<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") 
{

	$identificacionAfiliado = $_POST['ident'];
    ?>
    <script type="text/javascript">

     $(function() {
            $('#sandbox-container input').datepicker({
        });
    });
    
    function validarFormularioBen()
    {
        if (initValue('identBenef,tipoIdentBen,nombreBeneficiario,apellidosBeneficiario,nacimientoBeneficiario,parentesco')==true)
        {
                        loadContentP('form-action','beneficiarios/formBeneficiariosInsertar.php',
                        'identBenef='+devuelveValor('identBenef')
                        +'&tipoIdentBen='+devuelveValor('tipoIdentBen')
                        +'&nombreBeneficiario='+devuelveValor('nombreBeneficiario')
                        +'&apellidosBeneficiario='+devuelveValor('apellidosBeneficiario')
                        +'&nacimientoBeneficiario='+devuelveValor('nacimientoBeneficiario')
                        +'&parentesco='+devuelveValor('parentesco')
                        +'&identificacionAfil='+devuelveValor('identificacionAfiliado')); 
                        setValue('identBenef',''); setValue('tipoIdentBen','--');setValue('nombreBeneficiario','');
                        setValue('apellidosBeneficiario','');setValue('nacimientoBeneficiario','')
                        ;setValue('parentesco','');;
            
        }
        else
        {
            alert('Los campos resaltados son Obligatorios');
        }
    }

	</script>

    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Agregar beneficiarios</h3>
                </div>
                <form>
                 <div class="box-body">
                 <div class="box-body table-responsive">
                                        <input type="text" hidden="hidden" value="<?=$identificacionAfiliado?>" id="identificacionAfiliado"/>
                                        <table id="beneficiarios" class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="15%">No. Identificación</th>
                                                    <th width="15%">Tipo Identificación</th>
                                                    <th width="20%">Nombres</th>
                                                    <th width="20%">Apellidos</th>
                                                    <th width="12%">Fecha Nacimiento</th>
                                                    <th width="13%">Parentesco</th>
                                                    <th width="5%">Guardar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            for($i = 1; $i <= 1; $i++)
                                            {
                                                echo "<tr id=\"tr_$i\">";
                                                echo "<td id=\"td_id\"><input type=\"text\" class=\"form-control\" id=\"identBenef\" name=\"identBenef\" onkeyup=\"valNumero(this);\" onblur=\"resetColor(this);\" /></td>";
                                                echo "<td id=\"tipo\">";
                                                echo    "<select class=\"form-control\" name=\"tipoIdentBen\" id=\"tipoIdentBen\" onblur=\"resetColor(this);\">
                                                            <option value=\"--\">Seleccione</option>
                                                            <option value=\"CC\">Cédula de ciudadanía</option>
                                                            <option value=\"CE\">Cédula de extranjería</option>
                                                            <option value=\"TI\">Tarjeta de identidad</option>
                                                            <option value=\"RC\">Registro Civil</option>
                                                        </select>";
                                                echo "</td>";
                                                echo "<td id=\"nombreB\"><input type=\"text\" class=\"form-control\" id=\"nombreBeneficiario\" name=\"nombreBeneficiario\" onkeyup=\"valLetra(this);\" onblur=\"resetColor(this);\" /></td>";
                                                echo "<td id=\"apellidosB\"><input type=\"text\" class=\"form-control\" id=\"apellidosBeneficiario\" name=\"apellidosBeneficiario\" onkeyup=\"valLetra(this);\" onblur=\"resetColor(this);\" /></td>";
                                                echo "<td id=\"nacimientoB\"><div id=\"sandbox-container\"><input type=\"text\" class=\"form-control\" id=\"nacimientoBeneficiario\" name=\"nacimientoBeneficiario\" onblur=\"resetColor(this);\"/></div></td>";
                                                echo "<td id=\"parentescoB\">";
                                                echo    "<select class=\"form-control\" name=\"parentesco\" id=\"parentesco\" onblur=\"resetColor(this);\">
                                                            <option value=\"--\">Seleccione</option>";
                                                           
                                                            $query="SELECT * FROM `parentescos`";
                                                            $valueOpt="codigoParentesco";
                                                            $valueShowOpt="nombreParentesco"; 
                                                            cargarSelect($query, $valueOpt, $valueShowOpt, ".", ".");
                                                echo    "</select>";
                                                echo "</td>";
                                                echo "<td align='center' style=\"cursor:pointer\">
                                                        <span class=\"fa fa-fw fa-save\" title='Editar' alt='Editar'onclick=\"validarFormularioBen();\">
                                                      </td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </form>
                                <span id="form-action"></span>
                </div>
                </form>
                            
        </div>
    </div>    		                
	</section>

    <?php
} 
else 
{
?>
<script type="text/javascript">
location.href='error.php';
</script>
<?php 
}
?>