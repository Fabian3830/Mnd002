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
    function CrearUsuario($datos = array())
    {

        /*REGnombre":"qwe","REGapellido":"weq","REGemail":"qw","REGpassword":"qwe",
        "REGconfirm-password":"e","accion":"registrar"*/

        require 'conexion.php';
        $retorno = array();
        $retorno["valido"] = false;



        if (
            $datos['REGnombre'] != ''
            and $datos['REGapellido'] != ''
            and $datos['REGemail'] != ''
            and $datos['REGpassword'] != ''
            and $datos['REGconfirm-password'] != ''
        ) {
            //datos completos
            //si contraseña es igual
            if ($datos['REGpassword'] == $datos['REGconfirm-password']) {

                $sql = "insert into tb_cliente (correo ,nombre,contra ) values(:correo,:nombre,:contrasena)";

                $compiled = oci_parse($conn, $sql);

                
                oci_bind_by_name($compiled, ':correo', $datos['REGemail']);
                oci_bind_by_name($compiled, ':nombre', $datos['REGnombre']);
                oci_bind_by_name($compiled, ':contrasena', $datos['REGpassword']);
                //el apellido se lo pueden meter por el culo
                oci_execute($compiled);
                $retorno["valido"] = TRUE;
            } else {
                //contraseñas distintas
                $retorno["error"] = 'contraseñas distintas';
            }
        } else {
            /*datos vacios*/
            $retorno["error"] = 'datos vacios';
        }

        /*
     
*/

        return $retorno;
    }

    //Login
    function Login($datos = array())
    {
        require 'conexion.php';
        $retorno = array();
        $retorno["valido"] = false;

        $sql = "select * from tb_cliente where correo=:correo and contra=:contrasena";




        $stid = oci_parse($conn, $sql);

        oci_bind_by_name($stid, ':correo', $datos['InputEmail']);
        oci_bind_by_name($stid, ':contrasena', $datos['InputPassword']);
        oci_execute($stid);


        while (($row = oci_fetch_assoc($stid)) != false) {
            $_SESSION["datos-usuario"] = array(
                "Id" => $row['ID_CLIENTE'],
                "correo" => $row['CORREO'],
                "nombre" => $row['NOMBRE'],
                "contrasena" => $row['CONTRA']
            );
            $retorno["valido"] = true;
        }
        $retorno['datos_usuario'] = $_SESSION["datos-usuario"];

        return $retorno;
    }
}
