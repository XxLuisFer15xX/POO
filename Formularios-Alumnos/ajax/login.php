<?php
    session_start();
    $archivo = fopen("../data/administrador.json","r");
    while(($linea=fgets($archivo))){
        $registro=json_decode($linea,true);
        if(
            $_POST["usuario"]==$registro["usuario"]&&
            $_POST["password"]==$registro["password"]
        ){
            $registro["estatus"]="1";
            $registro["mensaje"]="Acceso autorizado";
            $_SESSION["usuario"]=$_POST["usuario"];
            $_SESSION["jerarquia"]=$registro["jerarquia"];
            echo json_encode($registro);
            exit;
        }
    }
    $registro = array();
    $registro["estatus"] = "0";
    $registro["mensaje"] = "Credendiales Invalidas, Por Favor Introduzca las nuevas Credenciales y Asegurese de que esten Correctas";
    echo json_encode($registro);
?>