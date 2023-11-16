<?php

require_once "..../.../conexion/conexion.php";
require_once "..../.../Modelo/Horario.php";
require_once "..../.../Controlador/Horarios.php";

if(isset($_POST["btn_nuevo"])){
    $ob=new Horarios();
    if($ob->abrirConexion()){
        $h = new Horario();
        $h = setDescripcion($_POST["descripcion"]);
        $h = setOrden($_POST["orden"]);
        if($ob->ingresar($h)){
            echo"registrado exitosamente";
        } else {
            echo"ERROR AL INTENTAR REGISTRAR";
        }
    }
}

?>
