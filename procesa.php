<?php

require './BACKEND/Usuario.php';

$user = new Usuario();

$accion = $_POST["accion"];

switch ($accion) {
    case "login":
        $resultado = $user->Login($_POST);      
       
        break;
    
   
    /*
    case "logout":
        session_start();
        //unset($_SESSION["datos-usuario"]["Nombre"]);        
        session_destroy();
        header("Location:index.php");
        break;
    */    
    
}


 echo json_encode($resultado);