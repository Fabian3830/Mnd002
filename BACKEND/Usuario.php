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

           
        $sql = "select * from tb_cliente where correo=:correo and contra=:contrasena";


        
        
        $stid = oci_parse($conn, $sql);
        
        oci_bind_by_name($stid , ':correo',$datos['LOGemail']);
        oci_bind_by_name($stid , ':contrasena', $datos['LOGpassword']);
        oci_execute($stid);

        while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {

            foreach ($row as $item) {
              array_push( $retorno,$item);
            }
        }




        /*$_SESSION["datos-usuario"] = array(
            "Id" => $_SESSION["datos-usuario"] > $usuario["Id"],
            "Cedula" => $usuario["Cedula"],
            "Nombre" => $usuario["Nombre"],
            "Apellidos" => $usuario["Apellidos"],
            "Rol" => $usuario["Rol"]
        );*/



        return $retorno;
    }

}
