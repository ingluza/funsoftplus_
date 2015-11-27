<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin") {

?>
<script type="text/javascript">

    $(function() {
            $('#sandbox-container input').datepicker({
        });
    });

    function validarAfiliado()
    {
        if (initValue('identificacionAfil') == false)
        {
            alert('Primero debe registrar los datos del afiliado');
        }
    }

    function verificarIdent()
    {
        loadContentR('verificaIdent','afiliados/verificarIdentificacion.php','ident='+devuelveValor('ident'));
    }



    function validarFormularioAfil()
    {
        if (initValue('ident,tipoIdent,dptoExp,lugarExp,nombre,apellido1,apellido2,fechaNac,dptoDomi,telefono,celular,direccion,email,ciudad')==true)
        {
            if(validarEmail('email')==false)
            {
                alert('La dirección de correo no es correcta.');
            }
            else
            {
                        loadContentR('form_action','afiliados/formAfiliadosInsertar.php',
                        'ident='+devuelveValor('ident')+'&tipoIdent='+devuelveValor('tipoIdent')
                        +'&lugarExp='+devuelveValor('lugarExp')+'&nombre='+devuelveValor('nombre')
                        +'&apellido1='+devuelveValor('apellido1')+'&apellido2='+devuelveValor('apellido2')
                        +'&fechaNac='+devuelveValor('fechaNac')+'&telefono='+devuelveValor('telefono')
                        +'&celular='+devuelveValor('celular')+'&direccion='+devuelveValor('direccion')
                        +'&ciudad='+devuelveValor('ciudad')
                        +'&email='+devuelveValor('email')); addValue('ident','identificacionAfil'); setValue('ident',''); 
                        setValue('lugarExp','--'); setValue('nombre','');setValue('apellido1','');setValue('apellido2','');
                        setValue('fechaNac','');setValue('telefono',''); setValue('celular','');setValue('direccion','');
                        setValue('email','');setValue('dptoExp','--');setValue('dptoDomi','--');setValue('ciudad','--');
            }
        }
        else
        {
            alert('Los campos resaltados son Obligatorios');
        }
    }

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
                        +'&identificacionAfil='+devuelveValor('identificacionAfil')); 
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

<section class="content-header">
    <h1>
    	Registro de Afiliados
  	</h1>
    <ol class="breadcrumb">
        <li><?= $G_cliente ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
                        <div class="col-md-12">
                            <div class="box box-solid">

                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1" data-toggle="tab">Datos Personales</a></li>
                                    <li><a href="#tab_2" data-toggle="tab">Registro de Beneficiarios</a></li>
                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                    <form role="form">
                                     <div class="row">
                                        <div class="col-xs-5">
                                            <label>No. de Identificación</label>
                                            <input type="text" class="form-control" id="ident" name="ident" onkeyup="valNumero(this);" onblur="resetColor(this);verificarIdent();" />
                                        </div>
                                        <div class="col-xs-5">
                                            <label>Tipo de Identificación</label>
                                            <select class="form-control" name="tipoIdent" id="tipoIdent" onblur="resetColor(this);">
                                                <option value="--">Seleccione</option>
                                                <option value="CC">Cédula de ciudadanía</option>
                                                <option value="CE">Cédula de extranjería</option>
                                                <option value="TI">Tarjeta de identidad</option>
                                                <option value="RC">Registro Civil</option>
                                            </select>
                                        </div>                                        
                                        <span id="verificaIdent"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <label>Lugar de Expedición</label>
                                             <select class="form-control" name="dptoExp" id="dptoExp" onblur="resetColor(this);" onchange="loadContentR('contLugarExp','afiliados/selectCiudad.php','dptoExp='+devuelveValor('dptoExp'));">
                                                <option value="--">Seleccione departamento</option>
                                                 <?php
                                                $query="SELECT * FROM `departamentos`";
                                                $valueOpt="codigoDepartamento";
                                                $valueShowOpt="nombreDepartamento"; 
                                                cargarSelect($query, $valueOpt, $valueShowOpt, ".", ".")
                                                ?>
                                            </select>
                                        </div>
                                        <span id="contLugarExp">
                                            
                                        </span>
                                    </div>
                                    <br /><br /><hr>
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <label >Nombres</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" onkeyup="valLetra(this);" onblur="resetColor(this);" />
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Primer Apellido</label>
                                            <input type="text" class="form-control" id="apellido1" name="apellido1" onkeyup="valLetra(this);" onblur="resetColor(this);"/>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Segundo Apellido</label>
                                            <input type="text" class="form-control" id="apellido2" name="apellido2" onkeyup="valLetra(this);" onblur="resetColor(this);"/>
                                        </div>
                                        <div id="sandbox-container">
                                            <div class="col-xs-5">
                                                <label >Fecha de Nacimiento</label>
                                                <input type="text" class="form-control" name="fechaNac" id="fechaNac" onblur="resetColor(this);" />
                                            </div>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Departamento de domicilio</label>
                                             <select class="form-control" name="dptoDomi" id="dptoDomi" onblur="resetColor(this);" onchange="loadContentR('contCiudad','afiliados/selectCiudad1.php','dptoDomi='+devuelveValor('dptoDomi'));">
                                                <option value="--">Seleccione departamento</option>
                                                 <?php
                                                $query="SELECT * FROM `departamentos`";
                                                $valueOpt="codigoDepartamento";
                                                $valueShowOpt="nombreDepartamento"; 
                                                cargarSelect($query, $valueOpt, $valueShowOpt, ".", ".")
                                                ?>
                                            </select>
                                        </div>
                                        <div id="contCiudad" class="col-xs-5">
                                            <label >Ciudad de domicilio</label>
                                            <select class="form-control" disabled="disabled">
                                                <option value="--">Seleccione ciudad</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Dirección</label>
                                            <input type="text" class="form-control" id="direccion" name="direccion" onblur="resetColor(this);"/>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Teléfono</label>
                                            <input type="text" class="form-control" id="telefono" name="telefono" onkeyup="valNumero(this);" onblur="resetColor(this);"/>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Celular</label>
                                            <input type="text" class="form-control" id="celular" name="celular" maxlength="10" onkeyup="valNumero(this);" onblur="resetColor(this);"/>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Correo electrónico</label>
                                            <input type="email" class="form-control" id="email" name="email" onblur="resetColor(this);"/>
                                        </div>
                                    </div>
                                    <br /><br />
                                    <div class="box-footer">
                                        <button type="button" id="buttonRegistrar" disabled="disabled" onclick="validarFormularioAfil();" class="btn btn-primary">Registrar</button>
                                        <span id="form_action"></span>                                    
                                    </div>
                                    </form>
                                    </div><!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2">
                                    <form role="form">
                                    <div class="box-body table-responsive">
                                    <input type="text" hidden="hidden"  id="identificacionAfil"/>
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
                                                echo "<td id=\"td_id\"><input type=\"text\" class=\"form-control\" id=\"identBenef\" name=\"identBenef\" onkeyup=\"valNumero(this);validarAfiliado();\" onblur=\"resetColor(this);\" /></td>";
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
                                    </form>
                                    <span id="form-action"></span>
                                    
                                    </div><!-- /.tab-pane -->
                                </div><!-- /.tab-content -->
                            </div><!-- nav-tabs-custom -->
                            
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->

                        
                    
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