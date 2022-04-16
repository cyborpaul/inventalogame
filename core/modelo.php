<?php
require_once('config.php');

class modelo{
    protected $mysqli;

    public function __construct(){
        $this->mysqli=new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);
        if($this->mysqli->connect_errno){
            echo "Fallo al conectar la Base de Datos". $this->mysqli->errno;
            return;
        }
        $this->mysqli->set_charset(DB_CHARSET);

    }
}

?>