<?php

require_once "conexion.php";

class ModeloUsuarios
{

    /*=======================
    MOSTRAR USUARIOS
    =========================*/
    static public function mdlMostrarUsuarios($table, $item, $valor)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $table WHERE $item=:$item");
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    /*=======================
    REGISTRAR USUARIOS
    =========================*/

    static public function mdlIngresarUsuario($table, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $table(nombres,usuario,password,perfil, foto) VALUES (
            :nombres, :usuario, :password, :perfil, :foto)");

            $stmt->bindParam(":nombres", $datos['nombres'], PDO::PARAM_STR);
            $stmt->bindParam(":usuario", $datos['usuario'], PDO::PARAM_STR);
            $stmt->bindParam(":password", $datos['password'], PDO::PARAM_STR);
            $stmt->bindParam(":perfil", $datos['perfil'], PDO::PARAM_STR);
            $stmt->bindParam(":foto", $datos['foto'], PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "ok";
            }else{
                return "error";
            }

    }
}
