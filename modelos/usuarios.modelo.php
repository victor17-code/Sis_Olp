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
}
