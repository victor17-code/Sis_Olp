<?php

class ControladorUsuarios
{

    /*=======================
    INGRESO USUARIOS
    =========================*/
    static public function ctrIngresoUsarios()
    {
        if (isset($_POST["ingUsuario"])) {
            if (
                preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingUsuario']) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingPassword'])) {

                    $table = "usuarios";

                    $item = "usuario";
                    $valor = $_POST["ingUsuario"];

                    $respuesta =  ModeloUsuarios::mdlMostrarUsuarios($table, $item, $valor);

                    if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPassword"]){
                        $_SESSION["iniciarSesion"] = "ok";
                        echo '<script>
                        window.location = "inicio";
                        </script>';

                    } else{
                        echo '<br><div class="alert alert-danger">Error vuelve a intentarlo</div>';
                    }                 
            }
        }
    }


    static public function ctrCrearUsuario(){
        if (isset($_POST['nuevoUsuario'])) {
            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nuevoNombre']) &&
            preg_match('/^[a-zA-Z0-9]+$/', $_POST['nuevoUsuario']) &&
            preg_match('/^[a-zA-Z0-9]+$/', $_POST['nuevoPassword'])) {
                # code...
            }else{
                echo '<script>
                swal({
                    type: "error",
                    title: "fhsfghdfg",
                    showConfirmButton:true,
                    confirmButtonText:"cerrar",
                    closeOnConfirm: false                   
                }).then((result)=>{
                    if(result.value){
                      window.location = "usuarios";
                    }
                });
                </script>';
            }
        }
    }


}