<?php
	$link = mysql_connect('localhost', 'root', '')or die('No se pudo conectar: ' . mysql_error());
mysql_select_db("autoadmin",$link)or die('No se pudo seleccionar la base de datos');


$modificacion = $_POST['mod'];
$query = "UPDATE intro SET dato='$modificacion' WHERE activado = 1" ;
mysql_query($query);


?>