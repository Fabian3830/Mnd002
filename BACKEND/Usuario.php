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


    function comprar($datos = array())
    {
        require 'conexion.php';
        $retorno = array();
        $retorno["valido"] = false;

        $articulos =  json_decode($datos['datos']);


        $sql = " insert into tb_Encabezado (FECHA ,ID_CLIENTE) values(sysdate,:id)";
        //"&id_cliente="+localStorage['id_cliente']+"&datos="+localStorage["carrito"]+"&accion=comprar"

        $stid = oci_parse($conn, $sql);
        oci_bind_by_name($stid, ':id', $datos['id_cliente']);
        oci_execute($stid);

        foreach ($articulos as $key => $value) {
            $sql = "declare
                       precio NUMBER;
                    begin
             
                       SELECT precio into precio FROM tb_articulo where no_articulo =:noarticulo;
                     
                       INSERT INTO tb_lineaPedido (no_Compra,no_Articulo,unidades ,precio_Unidad ,precio_Total) 
                       VALUES (Encabezado_seq.CURRVAL,:noarticulo,:unidades,precio,precio*:unidades);    
                  
                     end; ";

                     
            $stid = oci_parse($conn, $sql);
            oci_bind_by_name($stid, ':noarticulo', $value->ide);
            oci_bind_by_name($stid, ':unidades', $value->cant);
            oci_execute($stid);
        }

        $sql = '
      
        declare
        TOTALeh NUMBER;
        compra number:=Encabezado_seq.CURRVAL;
       begin
         
      SELECT sum(PRECIO_TOTAL) into TOTALeh FROM tb_lineaPedido lp where lp.NO_COMPRA=compra ;
      
      UPDATE tb_Encabezado 
      SET Total= TOTALeh
      WHERE NO_COMPRA = compra ;
      
          end;
 
       
       ';

        $stid = oci_parse($conn, $sql);
         
        oci_execute($stid);

        $retorno["valido"] = true;
        return $retorno;
    }
}
