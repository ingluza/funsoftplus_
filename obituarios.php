<?php 
include ("config.php");
include ("funciones.php");


?>

<!DOCTYPE HTML>
<html lang="es-es" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base  />
<meta name="generator" content="Joomla! - Open Source Content Management" />
<title>Obituarios | Astrea Funeraria La Fé</title>
<link href="contacto.html" rel="canonical" />

        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!--Master Lyte-->
        <link rel="stylesheet" href="master_lyte/master_lyte.css" type="text/css" />
        <!-- DATA TABLES -->
        <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="css/datepicker/datepicker.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Time Picker -->
        <link href="css/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>

	  <link href="component/search/index6120.html?Itemid=105&amp;format=opensearch" rel="search" title="Buscar Astrea Funeraria LA FE" type="application/opensearchdescription+xml" />
	  <link href="http://astreafunerarialafe.com/templates/yoo_glass/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/css/widgetkit.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/plugins/system/widgetkit_joomla/assets/css/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/accordion/styles/default/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/gallery/styles/glass/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/gallery/styles/inside/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/gallery/styles/showcase/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/gallery/styles/showcase_box/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/gallery/styles/slider/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/gallery/styles/wall/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/lightbox/css/lightbox.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/mediaplayer/mediaelement/mediaelementplayer.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/slideset/styles/default/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/slideshow/styles/default/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/slideshow/styles/glass/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/slideshow/styles/list/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/slideshow/styles/screen/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/slideshow/styles/showcase_box/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/slideshow/styles/showcase_buttons/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/slideshow/styles/tabs/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/slideshow/styles/tabs_bar/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/spotlight/css/spotlight.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/media/widgetkit/widgets/twitter/styles/style.css" type="text/css" />
	  <link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/css/bootstrap.css" type="text/css" />
	  <script src="http://astreafunerarialafe.com/media/system/js/mootools-core.js" type="text/javascript"></script>
	  <script src="http://astreafunerarialafe.com/media/system/js/core.js" type="text/javascript"></script>
	  <script src="http://astreafunerarialafe.com/media/system/js/validate.js" type="text/javascript"></script>
	  <script src="http://astreafunerarialafe.com/media/system/js/mootools-more.js" type="text/javascript"></script>
	  <script src="http://astreafunerarialafe.com/media/jui/js/jquery.min.js" type="text/javascript"></script>
	  <script src="http://astreafunerarialafe.com/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
	  <script src="http://astreafunerarialafe.com/media/widgetkit/js/jquery.plugins.js" type="text/javascript"></script>
	  <script src="http://astreafunerarialafe.com/media/widgetkit/js/responsive.js" type="text/javascript"></script>
	  <script src="http://astreafunerarialafe.com/media/widgetkit/widgets/accordion/js/accordion.js" type="text/javascript"></script>
	  <script src="http://astreafunerarialafe.com/media/widgetkit/widgets/gallery/js/lazyloader.js" type="text/javascript"></script>
	  <script src="http://astreafunerarialafe.com/media/widgetkit/widgets/map/js/lazyloader.js" type="text/javascript"></script>
	  <script src="http://astreafunerarialafe.com/media/widgetkit/widgets/slideset/js/lazyloader.js" type="text/javascript"></script>
	  <script src="http://astreafunerarialafe.com/media/widgetkit/widgets/slideshow/js/lazyloader.js" type="text/javascript"></script>
	  <script src="http://astreafunerarialafe.com/media/widgetkit/widgets/twitter/twitter.js" type="text/javascript"></script>
	  <!-- jQuery UI 1.10.3 -->
      <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
	  <!-- Bootstrap -->
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
      <!--Funciones AJAX -->
      <script type="text/javascript" src="fx_ajax.js"></script>        
      <!-- DATA TABLES SCRIPT -->
      <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
      <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script type="text/javascript">

function keepAlive() {	var myAjax = new Request({method: "get", url: "index.php"}).send();} window.addEvent("domready", function(){ keepAlive.periodical(840000); });
window.addEvent('domready', function() {
			$$('.hasTip').each(function(el) {
				var title = el.get('title');
				if (title) {
					var parts = title.split('::', 2);
					el.store('tip:title', parts[0]);
					el.store('tip:text', parts[1]);
				}
			});
			var JTooltips = new Tips($$('.hasTip'), {"maxTitleChars": 50,"fixed": false});
		});
window["WIDGETKIT_URL"]="/media/widgetkit";
function wk_ajax_render_url(widgetid){ return "/index.php/component/widgetkit/?format=raw&amp;id="+widgetid}
$widgetkit.load('http://astreafunerarialafe.com/media/widgetkit/widgets/lightbox/js/lightbox.js').done(function(){ 
					jQuery(function($){
						setTimeout(function() { 
							$('a[data-lightbox]').lightbox({"titlePosition":"float","transitionIn":"fade","transitionOut":"fade","overlayShow":1,"overlayColor":"#777","overlayOpacity":0.7}); 
						}, 500);
					});
			});
$widgetkit.trans.addDic({"FROM_ADDRESS":"From address: ","GET_DIRECTIONS":"Get directions","FILL_IN_ADDRESS":"Please fill in your address.","ADDRESS_NOT_FOUND":"Sorry, address not found!","LOCATION_NOT_FOUND":", not found!"});
if (!window['mejs']) { $widgetkit.load('http://astreafunerarialafe.com/media/widgetkit/widgets/mediaplayer/mediaelement/mediaelement-and-player.js').done(function() { jQuery(function($){
				mejs.MediaElementDefaults.pluginPath='http://astreafunerarialafe.com/media/widgetkit/widgets/mediaplayer/mediaelement/'; 
				$('video,audio').each(function(){
					var ele = $(this);
					if (!ele.parent().hasClass('mejs-mediaelement')) {
						ele.data('mediaelement',new mejs.MediaElementPlayer(this, {"pluginPath":"\/media\/widgetkit\/widgets\/mediaplayer\/mediaelement\/"}));

						var w = ele.data('mediaelement').width, h = ele.data('mediaelement').height;

						$.onMediaQuery('(max-width: 767px)', {
							valid: function(){
								ele.data('mediaelement').setPlayerSize('100%', ele.is('video') ? '100%':h);
							},
							invalid: function(){
								var parent_width = ele.parent().width();

								if (w>parent_width) {
									ele.css({width:'',height:''}).data('mediaelement').setPlayerSize('100%', '100%');
								} else {
									ele.css({width:'',height:''}).data('mediaelement').setPlayerSize(w, h);
								}
							}
						});

						if ($(window).width() <= 767) {
							ele.data('mediaelement').setPlayerSize('100%', ele.is('video') ? '100%':h);
						}
					}
				});
			}); });} else { jQuery(function($){
				mejs.MediaElementDefaults.pluginPath='http://astreafunerarialafe.com/media/widgetkit/widgets/mediaplayer/mediaelement/'; 
				$('video,audio').each(function(){
					var ele = $(this);
					if (!ele.parent().hasClass('mejs-mediaelement')) {
						ele.data('mediaelement',new mejs.MediaElementPlayer(this, {"pluginPath":"\/media\/widgetkit\/widgets\/mediaplayer\/mediaelement\/"}));

						var w = ele.data('mediaelement').width, h = ele.data('mediaelement').height;

						$.onMediaQuery('(max-width: 767px)', {
							valid: function(){
								ele.data('mediaelement').setPlayerSize('100%', ele.is('video') ? '100%':h);
							},
							invalid: function(){
								var parent_width = ele.parent().width();

								if (w>parent_width) {
									ele.css({width:'',height:''}).data('mediaelement').setPlayerSize('100%', '100%');
								} else {
									ele.css({width:'',height:''}).data('mediaelement').setPlayerSize(w, h);
								}
							}
						});

						if ($(window).width() <= 767) {
							ele.data('mediaelement').setPlayerSize('100%', ele.is('video') ? '100%':h);
						}
					}
				});
			});; }
$widgetkit.load('http://astreafunerarialafe.com/media/widgetkit/widgets/spotlight/js/spotlight.js').done(function(){jQuery(function($){ $('[data-spotlight]').spotlight({"duration":300}); });});
$widgetkit.trans.addDic({"LESS_THAN_A_MINUTE_AGO":"less than a minute ago","ABOUT_A_MINUTE_AGO":"about a minute ago","X_MINUTES_AGO":"%s minutes ago","ABOUT_AN_HOUR_AGO":"about an hour ago","X_HOURS_AGO":"about %s hours ago","ONE_DAY_AGO":"1 day ago","X_DAYS_AGO":"%s days ago"});
  </script>
  <script type="text/javascript">
    (function() {
      var strings = {"JLIB_FORM_FIELD_INVALID":"Campo inv\u00e1lido:&#160"};
      if (typeof Joomla == 'undefined') {
        Joomla = {};
        Joomla.JText = strings;
      }
      else {
        Joomla.JText.load(strings);
      }
    })();
  </script>

<link rel="apple-touch-icon-precomposed" href="http://astreafunerarialafe.com/templates/yoo_glass/apple_touch_icon.png" />
<link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/css/base.css" />
<link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/css/layout.css" />
<link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/css/menus.css" />
<style>.wrapper { max-width: 1220px; }
#maininner { width: 100%; }
#menu .dropdown { width: 250px; }
#menu .columns2 { width: 500px; }
#menu .columns3 { width: 750px; }
#menu .columns4 { width: 1000px; }</style>
<link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/css/modules.css" />
<link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/css/tools.css" />
<link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/css/system.css" />
<link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/css/extensions.css" />
<link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/styles/sky/css/custom.css" />
<link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/css/color/royal.css" />
<link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/css/font1/sourcesanspro.css" />
<link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/css/font2/sourcesanspro.css" />
<link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/css/font3/sourcesanspro.css" />
<link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/styles/sky/css/style.css" />
<link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/css/responsive.css" />
<link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/css/print.css" />
<link rel="stylesheet" href="http://astreafunerarialafe.com/templates/yoo_glass/fonts/sourcesanspro.css" />
<script>window["WarpThemePath"]="/templates/yoo_glass";</script>
<script src="http://astreafunerarialafe.com/templates/yoo_glass/warp/js/warp.js"></script>
<script src="http://astreafunerarialafe.com/templates/yoo_glass/warp/js/responsive.js"></script>
<script src="http://astreafunerarialafe.com/templates/yoo_glass/warp/js/accordionmenu.js"></script>
<script src="http://astreafunerarialafe.com/templates/yoo_glass/warp/js/dropdownmenu.js"></script>
<script src="http://astreafunerarialafe.com/templates/yoo_glass/js/template.js"></script>
</head>

<body id="page" class="page  noblog  system- system-none" data-config='{"twitter":1,"plusone":1,"facebook":1,"style":"sky"}'>
<div style="width:80%; height:80%;" id="ContenedorML"></div>
		
	<div class="wrapper clearfix">

		<header id="header">

			
				
			<a id="logo" href="../index.html">
<div class="size-auto custom-logo"> </div></a>
			
						<div id="menubar" class="clearfix">
				
								<div id="search">
<form id="searchbox-40" class="searchbox" action="http://astreafunerarialafe.com/index.php/contacto" method="post" role="search">
	<input type="text" value="" name="searchword" placeholder="buscar..." />
	<button type="reset" value="Reset"></button>
	<input type="hidden" name="task"   value="search" />
	<input type="hidden" name="option" value="com_search" />
	<input type="hidden" name="Itemid" value="105" />	
</form>

<script src="http://astreafunerarialafe.com/templates/yoo_glass/warp/js/search.js"></script>
<script>
jQuery(function($) {
	$('#searchbox-40 input[name=searchword]').search({'url': '/index.php/component/search/?tmpl=raw&amp;type=json&amp;ordering=&amp;searchphrase=all', 'param': 'searchword', 'msgResultsHeader': 'Resultados de búsqueda', 'msgMoreResults': 'Más resultados', 'msgNoResults': 'No se encontraron resultados'}).placeholder();
});
</script></div>
								
<nav id="menu">
	<ul class="menu menu-dropdown">
		<li class="level1 item101"><a href="../index.html" class="level1"><span>Inicio</span></a></li>
		<li class="level1 item102"><a href="quienes-somos.html" class="level1"><span>¿Quienes Somos?</span></a></li>
		<li class="level1 item106 parent active current"><a href="#" class="level1 parent active current"><span>Servicios</span></a>
			<div class="dropdown columns1">
				<div class="dropdown-bg">
					<div>
						<div class="width100 column">
							<ul class="nav-child unstyled small level2">
								<li class="level2 item192"><a href="servicios/nuestros-servicios.html" class="level2"><span>Nuestros Servicios</span></a></li>
								<li class="level2 item198"><a href="obituarios.php" class="level2"><span>Obituarios</span></a></li>
								<li class="level2 item199"><a href="servicios/servicio-al-cliente.html" class="level2"><span>Servicio al Cliente</span></a></li>
								<li class="level2 item193"><a href="servicios/cotizacion.html" class="level2"><span>Cotizar</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li class="level1 item132"><a href="galeria.html" class="level1"><span>Galeria</span></a></li>
		<li class="level1 item107"><a href="ayuda-al-duelo.html" class="level1"><span>Ayuda al Duelo</span></a></li>
		<li class="level1 item105"><a href="contacto.html" class="level1"><span>Contáctenos</span></a></li>
	</ul>
</nav>
								
			</div>
			
					
		</header>

				
				
				<div id="main" class="grid-block">

			<div id="maininner" class="grid-box">



<section id="content" class="grid-block">

					
					
<div id="system-message-container">
<div id="system-message">
</div>
</div>

<div id="system">

	
	
	
	<div class="item">
	
		<h1 class="title">Obituarios</h1>
				
		<?php
		$sql="SELECT o.idObituario, o.fechaExequias, o.lugarExequias, o.horaExequias, o.destinoFinal, o.hora, f.identificacionUsuario, f.tipoUsuario
          FROM  obituarios o, fallecimientos f
          WHERE f.idFallecimiento = o.idFallecimiento ";

                                        $result = ejecutarSQL($sql); 
                                        if(($result->num_rows)!=0)
                                        {
                                            $nreg = 0;
                                            while($fila=mysqli_fetch_array($result)) 
                                            {
                                                if($fila['tipoUsuario']=='Afiliado')
                                                {
                                                    $res =ejecutarSQL("SELECT nombreAfiliado, apellido1Afiliado, apellido2Afiliado, emailAfiliado FROM afiliados WHERE identificacionAfiliado =".$fila['identificacionUsuario']);
                                                    $nombre=mysqli_fetch_row($res);
                                                    ?>
		                                            <div class="col-md-4">
		                                                <!-- Default box -->
		                                                <div class="box">
		                                                    <div class="box-header">
		                                                        <h3 class="box-title"><?=$nombre[0]?> <?=$nombre[1]?> <?=$nombre[2]?></h3>
		                                                        <?php
		                                                        echo"<input type=\"hidden\" id=\"nombreFallecido$nreg\" value=\"$nombre[0] $nombre[1] $nombre[2]\">";
		                                                        echo"<input type=\"hidden\" id=\"mail$nreg\" value=\"$nombre[3] \">";
		                                                    	?>
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
		                                                    <?php 
		                                                    echo"<button class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\" title=\"Enviar condolencias\" onclick=\"ActivarML1(this.id,'ContenedorML');
		                                                        loadContentP('lightContent','obituarios/enviarCondolencias.php','nombreFallecido='+devuelveValor('nombreFallecido$nreg')+'&mail='+devuelveValor('mail$nreg'));\">
		                                                        <i class=\"fa fa-fw fa-envelope\"></i>
		                                                    </button>";
		                                                    ?>
		                                                    </div><!-- /.box-footer-->
		                                                </div><!-- /.box -->
		                                            </div><!-- /.col -->
		                                            <?php
                                                }
                                                else
                                                {
                                                    $res =ejecutarSQL("SELECT nombreBeneficiario, apellidosBeneficiario,emailAfiliado FROM beneficiarios b
                                                    INNER JOIN afiliadosbeneficiarios ab
                                                    ON b.identificacionBeneficiario = ab.identificacionBeneficiario
                                                    INNER JOIN afiliados a
                                                    ON a.identificacionAfiliado = ab.identificacionAfiliado
                                                    AND b.identificacionBeneficiario =".$fila['identificacionUsuario']);
                                                    $nombre=mysqli_fetch_row($res);
                                                    ?>
		                                            <div class="col-md-4">
		                                                <!-- Default box -->
		                                                <div class="box">
		                                                    <div class="box-header">
		                                                        <h3 class="box-title"><?=$nombre[0]?> <?=$nombre[1]?>  </h3>
		                                                        <?php
		                                                        echo"<input type=\"hidden\" id=\"nombreFallecido$nreg\" value=\"$nombre[0] $nombre[1] \">";
		                                                        echo"<input type=\"hidden\" id=\"mail$nreg\" value=\"$nombre[2] \">"
		                                                    	?>
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
		                                                    <?php 
		                                                    echo"<button class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\" title=\"Enviar condolencias\" onclick=\"ActivarML1(this.id,'ContenedorML');
		                                                        loadContentP('lightContent','obituarios/enviarCondolencias.php','nombreFallecido='+devuelveValor('nombreFallecido$nreg')+'&mail='+devuelveValor('mail$nreg'));\">
		                                                        <i class=\"fa fa-fw fa-envelope\"></i>
		                                                    </button>";
		                                                    ?>
		                                                    </div><!-- /.box-footer-->
		                                                </div><!-- /.box -->
		                                            </div><!-- /.col -->
		                                            <?php
                                                }
                                            
                                                
                                                
                                            $nreg++;
                                            }
                                        }
                                        
                                      


                                        ?>
		

				
	</div>
	
</div>

</section>
				
				
</div>
</div>
		
				
				
<footer id="footer">
	<a id="totop-scroller" href="#page"></a>
			
		<div class="module   deepest">
			<ul class="menu menu-line"><li class="level1 item109"><a href="contacto/contacto.html" class="level1"><span>Contacto</span></a></li><li class="level1 item108"><a href="#" class="level1"><span>Políticas de privacidad</span></a></li><li class="level1 item110"><a href="ayuda-al-duelo.html" class="level1"><span>Blog</span></a></li></ul>		
		</div>
		<div class="module   deepest">
			<p>Copyright © 2015 <a href="#">FunSoft Plus</a></p>		
		</div>Desarrollado por: <a href="#">FunsoftPlus</a>
</footer>
</div>
	
		
</body>

<!-- Mirrored from astreafunerarialafe.com/index.php/contacto by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Nov 2015 16:38:12 GMT -->
</html>s