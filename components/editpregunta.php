<?php
$id = $_GET['id'];
$pregunta=$_POST['pregunta'];
$servicio=$_POST['servicio'];
$nivel=$_POST['nivel'];
$asignatura=$_POST['asignatura'];
$optiona=$_POST['optiona'];
$optionb=$_POST['optionb'];
$optionc=$_POST['optionc'];
$optiond=$_POST['optiond'];
$optione=$_POST['optione'];
$respuesta=$_POST['respuesta'];

require 'config.php';

$sql="UPDATE `inventalogame_preguntas` SET 
`pre_txt_preguntas`='$pregunta',
`pre_varchar_servicio`='$servicio',`niv_int_id`='$nivel',
`asi_int_id`='$asignatura',`pre_varchar_optiona`='$optiona',
`pre_varchar_optionb`='$optionb',`pre_varchar_optionc`='$optionc',
`pre_varchar_optiond`='$optiond',`pre_varchar_optione`='$optione',
`pre_varchar_respuesta`='$respuesta' WHERE pre_int_id='$id'";

$ejecutado=mysqli_query($mysqli,$sql);

?>