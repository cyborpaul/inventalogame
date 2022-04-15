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

$i = 1;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(";", $linea);

        $pregunta=  utf8_encode($datos[0]);
        $servicio=  !empty($datos[1])  ? ($datos[1]) : '';
        $nivel=     !empty($datos[2])  ? ($datos[2]) : '';
        $asignatura=!empty($datos[3])  ? ($datos[3]) : '';
        $optiona=  !empty(utf8_encode($datos[4]))  ? (utf8_encode($datos[4])) : ''; 
        $optionb=   utf8_encode($datos[5]);
        $optionc=   utf8_encode($datos[6]);
        $optiond=   utf8_encode($datos[7]);
        $optione=   utf8_encode($datos[8]);
        $respuesta= utf8_encode($datos[9]);
       
    $insertar = "INSERT INTO `inventalogame_preguntas`(`pre_txt_preguntas`, `pre_varchar_servicio`, `niv_int_id`, `asi_int_id`, `pre_varchar_optiona`, `pre_varchar_optionb`, `pre_varchar_optionc`, `pre_varchar_optiond`, `pre_varchar_optione`, `pre_varchar_respuesta`) VALUES ('$pregunta','$servicio','$nivel','$asignatura','$optiona','$optionb','$optionc','$optiond','$optione','$respuesta')";
        mysqli_query($mysqli, $insertar);
    }

      echo '<div>'. $i. "). " .$linea.'</div>';
    $i++;
}

echo '<center><p style="text-aling:center; color:#333;">Total de Registros: '. $cantidad_regist_agregados .'</p></center>';

/* echo '<script>location.href="index.php?mapa='.$mapa.'</script>'; */

?>

