<?php
//session_start();
include "../config.php";
include "../funciones.php";
include "../acceso.php";
if($VP_perfil=="Admin")
{
    
?>
<script type="text/javascript">



    function validarFormulario()
    {
        if (initValue('nombreServicio')==true)
        {
            
                        loadContentR('form_action','servicios/formServiciosInsertar.php',
                        'nombreServicio='+devuelveValor('nombreServicio')
                        +'&descripcionServicio='+devuelveValor('descripcionServicio'));
                        setValue('nombreServicio',''); setValue('descripcionServicio','');

           
        }
        else
        {
            alert('Los campos resaltados son Obligatorios');
        }
    }

</script>

<section class="content-header">
    <h1>
    	Registro de Servicios
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
                <div class="box-header">
                    <h3 class="box-title"></h3>
                </div>
                <form>
                 <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <label >Nombre del servicio</label>
                                            <input type="text" class="form-control" id="nombreServicio" name="nombreServicio" onblur="resetColor(this);" />
                                        </div>
                                        <div class="col-xs-5">
                                            <label >&nbsp;</label>
                                            <input type="text" hidden="hidden" />
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <label >Descripción del servicio</label>
                                            <input type="text" class="form-control" id="descripcionServicio" name="descripcionServicio" onblur="resetColor(this);" />
                                        </div>
                                        <div class="col-xs-5">
                                            <label >&nbsp;</label>
                                            <input type="text" hidden="hidden" />
                                        </div>
                                    </div>

                    <br /><br />
                    <div class="box-footer">
                        <button type="button" id="buttonRegistrar" onclick="validarFormulario();" class="btn btn-primary">Registrar</button>
                        <span id="form_action"></span> 
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