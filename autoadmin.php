<?php
class conexion{
	function recuperar(){

$link = mysql_connect('localhost', 'root', '')or die('No se pudo conectar: ' . mysql_error());
mysql_select_db("autoadmin",$link)or die('No se pudo seleccionar la base de datos');
$query = "SELECT dato FROM intro WHERE activado = 1" ;
$resultado=mysql_query($query);

while ($fila = mysql_fetch_array($resultado)) {
	echo $fila['dato'];
}
if (!$resultado) {
    printf("Error: %s\n", mysql_error($link));
    exit();
}
}
}

?>