<?php

    require 'config.php';

    header('Content-Encoding: UTF-8');
    header('Content-type: text/csv; charset=UTF-8');    
    header('Content-Disposition:attachment; filename="preguntas.csv"');
    //header('Content-Type:text/csv; charset-latin1');

    $salida=fopen('php://output','w');

    fputcsv($salida, array('pre_txt_preguntas', 'pre_varchar_servicio', 'niv_int_id', 'asi_int_id', 'pre_varchar_optiona', 'pre_varchar_optionb', 'pre_varchar_optionc','pre_varchar_optiond','pre_varchar_optione', 'pre_varchar_respuesta'), ";");

    $reporteCsv=$mysqli->query("SELECT * FROM inventalogame_preguntas");
    while ($filaR=$reporteCsv->fetch_assoc())
        fputcsv($salida, array(utf8_encode($filaR['pre_txt_preguntas']), $filaR['pre_varchar_servicio'],$filaR['niv_int_id'],$filaR['asi_int_id'],$filaR['pre_varchar_optiona'],$filaR['pre_varchar_optionb'],$filaR['pre_varchar_optionc'],$filaR['pre_varchar_optiond'],$filaR['pre_varchar_optione'],$filaR['pre_varchar_respuesta']), ";");   

?>