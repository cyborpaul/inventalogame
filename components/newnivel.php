<?php
$nivel=$_POST['nivel'];
$descripcion=$_POST['descripcion'];
require("config.php");
$sql= "INSERT INTO `inventalogame_niveles`(`niv_varchar_nivel`, `niv_varchar_descripcion`) VALUES ('$nivel','$descripcion')";
$ejecutado=mysqli_query($mysqli,$sql);

?>