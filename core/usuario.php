<?php
require_once('modelo.php');

class usuario extends modelo{
    protected $mail;
	protected $name;
	protected $lastname;
	protected $nickname;
	protected $password;
	protected $passcifrada;
	protected $rol;

    public function __construct(){
        parent::__construct();
    }

    public function registro($mail, $name, $lastname, $nickname, $passcifrada, $rol){
        $sql="INSERT INTO sanmarcos_usuarios (usu_txt_email,usu_txt_name, usu_txt_lastname, usu_txt_nickname,usu_txt_password,usu_txt_rol) VALUES('$mail','$name','$lastname','$nickname','$passcifrada','$rol')";
        $resultado=$this->mysqli->query($sql);
        if(!$resultado){
            echo "Fallo en el registro del usuario";

        }else{
            return $resultado;
            $resultado->close();
            $this->mysqli->close();
        }

    }
}
?>