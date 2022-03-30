<?php
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

require("config.php");
$sql= "INSERT INTO `inventalogame_preguntas`(`pre_txt_preguntas`, `pre_varchar_servicio`, `niv_int_id`, `asi_int_id`, `pre_varchar_optiona`, `pre_varchar_optionb`, `pre_varchar_optionc`, `pre_varchar_optiond`, `pre_varchar_optione`, `pre_varchar_respuesta`) VALUES ('$pregunta','$servicio','$nivel','$asignatura','$optiona','$optionb','$optionc','$optiond','$optione','$respuesta')";
$ejecutado=mysqli_query($mysqli,$sql);

?>