<?php

$asignatura=$_POST['asignatura'];
$descripcion=$_POST['descripcion'];
require("config.php");
$sql= "INSERT INTO `inventalogame_asignaturas`(`asi_varchar_asignatura`, `asi_txt_descripcion`) VALUES ('$asignatura','$descripcion')";
$ejecutado=mysqli_query($mysqli,$sql);
?>