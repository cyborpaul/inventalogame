<?php
//ENCRIPTACIÓN DE PREGUNTA
$string=$_POST['pregunta'];
$key= "qwertyuiopasdfghjklñzxcvbnm";
$result = '';
for($i=0; $i<strlen($string); $i++) {
   $char = substr($string, $i, 1);
   $keychar = substr($key, ($i % strlen($key))-1, 1);
   $char = chr(ord($char)+ord($keychar));
   $result.=$char;
}
$pregunta=base64_encode($result);
//FIN ENCRIPTACIÓN DE PREGUNTA

$servicio=$_POST['servicio'];
$nivel=$_POST['nivel'];
$asignatura=$_POST['asignatura'];
$optiona=$_POST['optiona'];
$optionb=$_POST['optionb'];
$optionc=$_POST['optionc'];
$optiond=$_POST['optiond'];
$optione=$_POST['optione'];

$pass=$_POST['respuesta'];
$key= "qwertyuiopasdfghjklñzxcvbnm";
$res = '';
for($i=0; $i<strlen($pass); $i++) {
   $char = substr($pass, $i, 1);
   $keychar = substr($key, ($i % strlen($key))-1, 1);
   $char = chr(ord($char)+ord($keychar));
   $res.=$char;
}

$respuesta=base64_encode($res);




require("config.php");
$sql= "INSERT INTO `inventalogame_prueba`(`pre_txt_preguntas`, `pre_varchar_servicio`, `niv_int_id`, `asi_int_id`, `pre_varchar_optiona`, `pre_varchar_optionb`, `pre_varchar_optionc`, `pre_varchar_optiond`, `pre_varchar_optione`, `pre_varchar_respuesta`) VALUES ('$pregunta','$servicio','$nivel','$asignatura','$optiona','$optionb','$optionc','$optiond','$optione','$respuesta')";
$ejecutado=mysqli_query($mysqli,$sql);

?>