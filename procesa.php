<?php

require './BACKEND/Usuario.php';

$user = new Usuario();

$accion = $_POST["accion"];

switch ($accion) {
    case "login":
        $resultado = $user->Login($_POST);

        break;

    case "registrar":
         $resultado = $user->CrearUsuario($_POST);

        break;

    case "comprar":
        $resultado = $user->comprar($_POST);

        break;
        
    case "logout":
        session_start();
        
        session_destroy();
        header("Location:index.php");
        
        break;

}

echo json_encode($resultado);


