<?php

class Usuario
{
    /* ATRIBUTOS */


    private $nombre;
    private $contrasena;
    private $correo;
    /* CONSTRUCTOR */

    public function __construct()
    {
        $this->correo = "";
        $this->nombre = "";
        $this->contrasena = "";
    }

    /* METODOS */

    //Funcion Crear Usuario
    /*function CrearUsuario($datos = array()) {
        require './BD/Conexionbd.php';
        $retorno = array();
        $query = "INSERT INTO tbusuario (Cedula,Nombre,Apellidos,Contrasena,Rol)";
        $query .= " VALUES('" . $datos["Cedula"] . "','" . $datos["Nombre"] . "','";
        $query .= $datos["Apellidos"] . "','" . md5($datos["Contrasena"]) . "','";
        $query .= $datos["Rol"]."')";

        //echo $query;
        $resultado = $mysql->query($query);
        $id = $mysql->insert_id;

        if ($id > 0) {
            $retorno["valido"] = true;
        } else {
            $retorno["valido"] = false;
            $retorno["error"] = $mysql->connect_errno;
        }
        $mysql->close();
        return $retorno;
    }*/

    //Login
    function Login($datos = array())
    {
        require 'conexion.php';
        $retorno = array();
        $retorno["valido"] = false;
           
        $sql = "select * from tb_cliente where correo=:correo and contra=:contrasena";


        
        
        $stid = oci_parse($conn, $sql);
        
        oci_bind_by_name($stid , ':correo',$datos['InputEmail']);
        oci_bind_by_name($stid , ':contrasena', $datos['InputPassword']);
        oci_execute($stid);


        while (($row = oci_fetch_assoc($stid)) != false) {
               $_SESSION["datos-usuario"] = array(
                "Id" => $row['ID_CLIENTE'],
                "correo" =>$row['CORREO'],
                "nombre" => $row['NOMBRE'],
                "contrasena" =>$row['CONTRA']
               );
            $retorno["valido"] = true;
       }
       $retorno['datos_usuario']=$_SESSION["datos-usuario"];

       return $retorno;
    }

}
