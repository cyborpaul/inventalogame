<?php
$id=$_GET['id'];
$asignatura=$_POST['asignatura'];
$descripcion=$_POST['descripcion'];
require("config.php");
$sql= "UPDATE `inventalogame_asignaturas` SET `asi_varchar_asignatura`='$asignatura',`asi_txt_descripcion`='$descripcion' WHERE asi_int_id='$id'";
$ejecutado=mysqli_query($mysqli,$sql);
?>