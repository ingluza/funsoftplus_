<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";

if($VP_perfil) 
{

    if($VP_perfil=="Admin")
    {
        $sql = "SELECT * FROM empleados WHERE identificacionEmpleado = $VP_cedula";
    }
    else
    {
        $sql = "SELECT * FROM afiliados WHERE identificacionAfiliado = $VP_cedula";   
    }
    $res=ejecutarSQL($sql);
    $row=mysqli_fetch_row($res)
?>

<script type="text/javascript">

    $(function() {
            $('#sandbox-container input').datepicker({
        });
    });

    function verificaContrasena()
    {
        loadContentR('verificaContrasena','perfil/verificarContrasena.php','actual='+devuelveValor('actual'));
    }

        
    function validarFormularioContrasena()
    {
        if (initValue('actual,nueva1,nueva2')==true)
        {
            
            if (compararContrasenas('nueva1,nueva2')==true)
            {
                        loadContentR('form_action','perfil/cambiarContrasena.php',
                        'actual='+devuelveValor('actual')
                        +'&nueva1='+devuelveValor('nueva1')
                        +'&nueva2='+devuelveValor('nueva2')); 
                        setValue('actual',''); setValue('nueva1','');setValue('nueva2','');
            }
            else
            {
                alert('Las contraseñas no coinciden');
            }
        }
        else
        {
            alert('Los campos resaltados son Obligatorios');
        }
    }


    function validarDatosAdmin()
    {
        if (initValue('nombre,apellido1,apellido2,direccion,telefono,celular,email')==true)
        {
            loadContentR('form-action','perfil/actualizarDatos.php',
            'nombre='+devuelveValor('nombre')
            +'&apellido1='+devuelveValor('apellido1')
            +'&apellido2='+devuelveValor('apellido2')
            +'&direccion='+devuelveValor('direccion')
            +'&telefono='+devuelveValor('telefono')
            +'&celular='+devuelveValor('celular')
            +'&email='+devuelveValor('email'));

        }
        else
        {
            alert('Los campos resaltados son Obligatorios');
        }
    }


    function validarDatosAfiliado()
    {
        if (initValue('nombre,apellido1,apellido2,direccion,telefono,celular,email,dptoDomi,ciudad')==true)
        {
            loadContentR('form-action','perfil/actualizarDatos.php',
            'nombre='+devuelveValor('nombre')
            +'&apellido1='+devuelveValor('apellido1')
            +'&apellido2='+devuelveValor('apellido2')
            +'&direccion='+devuelveValor('direccion')
            +'&ciudad='+devuelveValor('ciudad')
            +'&telefono='+devuelveValor('telefono')
            +'&celular='+devuelveValor('celular')
            +'&email='+devuelveValor('email'));
            
        }
        else
        {
            alert('Los campos resaltados son Obligatorios');
        }
    }


</script>

<section class="content-header">
    <h1>
        Tu Perfil
    </h1>
    <ol class="breadcrumb">
        <li><?= $G_cliente ?></li>
    </ol>
</section>

<section class="content">
<div class="row">
                        <div class="col-md-12">
                            <div class="box box-solid">

                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1" data-toggle="tab">Datos Personales</a></li>
                                    <li><a href="#tab_2" data-toggle="tab">Contraseña</a></li>
                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                    <?php
                                    if ($VP_perfil=="Admin")
                                    {
                                    ?>
                                    <form role="form">
                                        <div class="row">
                                        <div class="col-xs-5">
                                            <label >Nombres</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?=$row[1]?>" onkeyup="valLetra(this);" onblur="resetColor(this);" />
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Primer Apellido</label>
                                            <input type="text" class="form-control" id="apellido1" name="apellido1" value="<?=$row[2]?>" onkeyup="valLetra(this);" onblur="resetColor(this);"/>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Segundo Apellido</label>
                                            <input type="text" class="form-control" id="apellido2" name="apellido2" value="<?=$row[3]?>" onkeyup="valLetra(this);" onblur="resetColor(this);"/>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-xs-5">
                                            <label >Dirección</label>
                                            <input type="text" class="form-control" id="direccion" name="direccion" value="<?=$row[4]?>" onblur="resetColor(this);"/>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Teléfono</label>
                                            <input type="text" class="form-control" id="telefono" name="telefono" value="<?=$row[5]?>" onkeyup="valNumero(this);" onblur="resetColor(this);"/>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Celular</label>
                                            <input type="text" class="form-control" id="celular" name="celular" value="<?=$row[6]?>" maxlength="10" onkeyup="valNumero(this);" onblur="resetColor(this);"/>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Correo electrónico</label>
                                            <input type="email" class="form-control" id="email" name="email" value="<?=$row[7]?>" onblur="resetColor(this);"/>
                                        </div>
                                    </div>
                                    <br /><br />
                                    <div class="box-footer">
                                        <button type="button" id="buttonRegistrar1" onclick="validarDatosAdmin();" class="btn btn-primary">Guardar cambios</button>
                                        <span id="form-action"></span>                                    
                                    </div>
                                    </form>
                                    <?php 
                                    }
                                    else
                                    {
                                        $sqlDpto="SELECT d.codigoDepartamento,d.nombreDepartamento,c.nombreCiudad FROM departamentos d, 
                                        ciudades c WHERE c.codigoDepartamento=d.codigoDepartamento and c.codigoCiudad = $row[8] ";
                                        $result = ejecutarSQL($sqlDpto);
                                        $dpto = mysqli_fetch_row($result);
                                    ?>
                                    <form role="form">
                                        <div class="row">
                                        <div class="col-xs-5">
                                            <label >Nombres</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?=$row[3]?>" onkeyup="valLetra(this);" onblur="resetColor(this);" />
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Primer Apellido</label>
                                            <input type="text" class="form-control" id="apellido1" name="apellido1"  value="<?=$row[4]?>"onkeyup="valLetra(this);" onblur="resetColor(this);"/>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Segundo Apellido</label>
                                            <input type="text" class="form-control" id="apellido2" name="apellido2"  value="<?=$row[5]?>" onkeyup="valLetra(this);" onblur="resetColor(this);"/>
                                        </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                        <div class="col-xs-5">
                                            <label >Departamento de domicilio</label>
                                             <select class="form-control" name="dptoDomi" id="dptoDomi" onblur="resetColor(this);" onchange="loadContentR('contCiudad','afiliados/selectCiudad1.php','dptoDomi='+devuelveValor('dptoDomi'));">
                                                <option value="<?=$dpto[0]?>"><?=$dpto[1]?></option>
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
                                            <select class="form-control" name="ciudad" id="ciudad" onblur="resetColor(this);" onchange="">
                                                <option value="<?=$row[8]?>"><?=$dpto[2]?></option>
                                                <?php

                                                    $query2="SELECT * FROM `ciudades` WHERE codigoDepartamento=$dpto[0]";
                                                    $valueOpt="codigoCiudad";
                                                    $valueShowOpt="nombreCiudad"; 
                                                    cargarSelect($query2, $valueOpt, $valueShowOpt, ".", ".");
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Dirección</label>
                                            <input type="text" class="form-control" id="direccion" name="direccion" value="<?=$row[7]?>" onblur="resetColor(this);"/>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Teléfono</label>
                                            <input type="text" class="form-control" id="telefono" name="telefono" value="<?=$row[9]?>" onkeyup="valNumero(this);" onblur="resetColor(this);"/>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Celular</label>
                                            <input type="text" class="form-control" id="celular" name="celular" value="<?=$row[10]?>" maxlength="10" onkeyup="valNumero(this);" onblur="resetColor(this);"/>
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Correo electrónico</label>
                                            <input type="email" class="form-control" id="email" name="email" value="<?=$row[11]?>" onblur="resetColor(this);"/>
                                        </div>
                                    </div>
                                    <br /><br />
                                    <div class="box-footer">
                                        <button type="button" id="buttonRegistrar1" onclick="validarDatosAfiliado();" class="btn btn-primary">Guardar cambios</button>
                                        <span id="form-action"></span>                                    
                                    </div>
                                    </form>
                                    <?php
                                    }
                                    ?>
                                    </div><!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2">
                                    <form role="form">
                                    <div class="box-body table-responsive">
                                        <div class="row">
                                        <div class="col-xs-5">
                                            <label >Contraseña actual</label>
                                            <input type="password" class="form-control" id="actual" name="actual" onblur="resetColor(this);verificaContrasena();" />
                                        </div>
                                        <span id="verificaContrasena"></span>
                                        </div>
                                        <div class="row">
                                        <div class="col-xs-5">
                                            <label >Contraseña nueva</label>
                                            <input type="password" class="form-control" id="nueva1" name="nueva1" onblur="resetColor(this);" />
                                        </div>
                                        <div class="col-xs-5">
                                            <label >Confirmar contraseña</label>
                                            <input type="password" class="form-control" id="nueva2" name="nueva2" onblur="resetColor(this);" />
                                        </div>
                                        </div>
                                    </div><!-- /.tab-pane -->
                                    <br /><br />
                                    <div class="box-footer">
                                        <button type="button" disabled="disabled" id="buttonRegistrar" onclick="validarFormularioContrasena();" class="btn btn-primary">Guardar cambios</button>
                                        <span id="form_action"></span>                                    
                                    </div>
                                    </form>
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
