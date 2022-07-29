<?php
require_once('modelo.php');

class preguntas extends modelo{
    protected $idpregunta;
    protected $pregunta;
    protected $servicio;
    protected $nivel;
    protected $asignatura;
    protected $optiona;
    protected $optionb;
    protected $optionc;
    protected $optiond;
    protected $optione;
    protected $respuesta;

    public function __construct(){
        parent::__construct();
    }

    public function registropreguntas($pregunta, $servicio, $nivel, $asignatura, $optiona, $optionb, $optionc, $optiond, $optione, $respuesta){

    }
    public function editarpreguntas($pregunta, $servicio, $nivel, $asignatura, $optiona, $optionb, $optionc, $optiond, $optione, $respuesta, $idpregunta){

    }
    public function eliminar($idpregunta){

    }


}

?>