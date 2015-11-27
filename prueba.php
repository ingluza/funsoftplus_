
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prueba de AutoComplete con jQuery, PHP y MySQL</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
<?php
include "config.php";
include "funciones.php";
                                        $sql = "select codigoCiudad, nombreCiudad from ciudades order by nombreCiudad";
                                        $res = ejecutarSQL($sql);
                                        $arreglo_php = array();
                                        if(($res->num_rows)==0)
                                           array_push($arreglo_php, "No hay datos");
                                        else{
                                          while($palabras = mysqli_fetch_array($res)){
                                            array_push($arreglo_php, $palabras["nombreCiudad"]);
                                          }
                                          print_r($palabras);
}
                                        ?>
<script type="text/javascript">
                                          $(function(){
                                            var autocompletar = new Array();
                                            <?php //Esto es un poco de php para obtener lo que necesitamos
                                             for($p = 0;$p < count($arreglo_php); $p++){ //usamos count para saber cuantos elementos hay ?>
                                               autocompletar.push('<?php echo $arreglo_php[$p]; ?>');
                                             <?php } ?>
                                             $("#buscar").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
                                               source: autocompletar //Le decimos que nuestra fuente es el arreglo
                                             });
                                          });
                                        </script>
<style>
a{
	text-decoration: none;
	color: #930;
}
a:hover{
	background-color: #930;
	color: #FFF;
}
</style>
</head>
<body>
</body>
<div style="margin: 40px auto; width: 400px; text-align: center; height: 400px; background-color: #F7F7F7; font-family: Verdana, Geneva, sans-serif;">
<img src="../images/tarjuccino.png" alt="Tarjuccino - Prueba de Autocomplete con jQuery, PHP y MySQL" title="Tarjuccino - Prueba de Autocomplete con jQuery, PHP y MySQL" />
<h2>Prueba de Autocomplete</h2>
<p>En cuanto aparezcan las opciones puedes seleccionar alguna</p>
<p><input type="text" id="buscar" /></p>
<p><a href="http://tarjuccino.com/tutoriales/programacion-web/autocompletar-con-jquery-php-y-mysql/">Regresar al tutorial</a> o si lo prefieres <a href="http://tarjuccino.com">Regresar a Tarjuccino</a></p>
</div>
</html>