<?php
$id=$_GET['id'];
$servicio=$_GET['servicio'];
require("config.php");
$sql= "UPDATE `inventalogame_servicios` SET `ser_varchar_servicio`='$servicio' WHERE ser_int_id='$id'";
$ejecutado=mysqli_query($mysqli,$sql);
var_dump($ejecutado);
var_dump($sql);
?>