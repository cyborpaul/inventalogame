<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
<?php
header('Content-Type: text/html; charset=UTF-8');
require('config.php');
$tipo       = $_FILES['dataCliente']['type'];
$tamanio    = $_FILES['dataCliente']['size'];
$archivotmp = $_FILES['dataCliente']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(";", $linea);

        //INICIO ENCRIPTAR

        $string=utf8_encode($datos[0]);
        $key= "qwertyuiopasdfghjklñzxcvbnm";
        $result = '';
        for($j=0; $j<strlen($string); $j++) {
           $char = substr($string, $j, 1);
           $keychar = substr($key, ($j % strlen($key))-1, 1);
           $char = chr(ord($char)+ord($keychar));
           $result.=$char;
        }
        $nombre=base64_encode($result);

        //FIN ENCRIPTAR



        $pregunta=  utf8_encode($nombre);
        $servicio=  !empty($datos[1])  ? ($datos[1]) : '';
        $nivel=     !empty($datos[2])  ? ($datos[2]) : '';
        $asignatura=!empty($datos[3])  ? ($datos[3]) : '';
        $optiona=  !empty(utf8_encode($datos[4]))  ? (utf8_encode($datos[4])) : ''; 
        $optionb=   utf8_encode($datos[5]);
        $optionc=   utf8_encode($datos[6]);
        $optiond=   utf8_encode($datos[7]);
        $optione=   utf8_encode($datos[8]);
        $respuesta= !empty(utf8_encode($datos[9]))  ? (utf8_encode($datos[9])) : '';
        //INICIO ENCRIPTAR 2
        $pass=$respuesta;
        $key= "qwertyuiopasdfghjklñzxcvbnm";
        $res = '';
        for($j=0; $j<strlen($pass); $j++) {
           $char = substr($pass, $j, 1);
           $keychar = substr($key, ($j % strlen($key))-1, 1);
           $char = chr(ord($char)+ord($keychar));
           $res.=$char;
        }
        $password=base64_encode($res);        
        //FIN ENCRIPTAR 2
       
    $insertar = "INSERT INTO `inventalogame_preguntas`(`pre_txt_preguntas`, `pre_varchar_servicio`, `niv_int_id`, `asi_int_id`, `pre_varchar_optiona`, `pre_varchar_optionb`, `pre_varchar_optionc`, `pre_varchar_optiond`, `pre_varchar_optione`, `pre_varchar_respuesta`) VALUES ('$pregunta','$servicio','$nivel','$asignatura','$optiona','$optionb','$optionc','$optiond','$optione','$password')";
        mysqli_query($mysqli, $insertar);
    }

      echo '<div>'. $i. "). " .utf8_encode($linea).'</div>';
    $i++;
}

echo '<center><p style="text-aling:center; color:#333;">Total de Registros: '. $cantidad_regist_agregados .'</p></center>';

/* echo '<script>location.href="index.php?mapa='.$mapa.'</script>'; */

?>

