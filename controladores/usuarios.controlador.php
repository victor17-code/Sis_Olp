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
                preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingPassword'])
            ) {

                $encriptar = crypt($_POST['ingPassword'], '$2a$07$usesomesillystringforsalt$');

                $table = "usuarios";

                $item = "usuario";
                $valor = $_POST["ingUsuario"];

                $respuesta =  ModeloUsuarios::mdlMostrarUsuarios($table, $item, $valor);

                if ($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $encriptar) {

                    $_SESSION["iniciarSesion"] = "ok";
                    $_SESSION["nombres"] = $respuesta['nombres'];
                    $_SESSION["foto"] = $respuesta['foto'];
                    echo '<script>
                        window.location = "inicio";
                        </script>';
                } else {
                    echo '<br><div class="alert alert-danger">Error vuelve a intentarlo</div>';
                }
            }
        }
    }


    static public function ctrCrearUsuario()
    {
        if (isset($_POST['nuevoUsuario'])) {
            if (
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nuevoNombre']) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST['nuevoUsuario']) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST['nuevoPassword'])
            ) {
              /*=====================================
                      VALIDAR IMAGEN
              ======================================== */

              $ruta = "";

                if(isset($_FILES["nuevaFoto"]["tmp_name"])){

                    list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);
                    $nuevoancho = 500;
                    $nuevoAlto = 500;

                    /* CREANDO DIRECTORIO */

                    $directorio = "vistas/img/usuarios/".$_POST["nuevoUsuario"];
                    mkdir($directorio, 0755);

                    /** SEGUN EL TIPO DE IMAGEN */
                    if ($_FILES["nuevaFoto"]["type"] == "image/jpeg") {
                        # guardar la imgen en el directorio

                        $aleatorio = mt_rand(100, 999);
                        $ruta = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".jpg";                                         
                        $origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoancho, $nuevoAlto);
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoancho, $nuevoAlto, $ancho, $alto);

                        imagejpeg($destino, $ruta);


                    }

                    /** SEGUN EL TIPO DE IMAGEN */
                    if ($_FILES["nuevaFoto"]["type"] == "image/png") {
                        # guardar la imgen en el directorio

                        $aleatorio = mt_rand(100, 999);
                        $ruta = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".jng";                                        
                        $origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoancho, $nuevoAlto);
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoancho, $nuevoAlto, $ancho, $alto);

                        imagepng($destino, $ruta);


                    }

                }

                $tabla = "usuarios";

                $encriptar = crypt($_POST['nuevoPassword'], '$2a$07$usesomesillystringforsalt$');

                $datos = array(
                    "nombres" => $_POST['nuevoNombre'],
                    "usuario" => $_POST['nuevoUsuario'],
                    "password" => $encriptar,
                    "perfil" => $_POST['nuevoPerfil'],
                    "foto" => $ruta
                );

                $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);

                if ($respuesta == "ok") {
                    echo '<script>
                swal({
                    type: "success",
                    title: "Datos Registrados corectamente",
                    showConfirmButton:true,
                    confirmButtonText:"OK",
                    closeOnConfirm: false                   
                }).then((result)=>{
                    if(result.value){
                      window.location = "usuarios";
                    }
                });
                </script>';
                }
            } else {
                echo '<script>
                swal({
                    type: "error",
                    title: "error caracteres especiales ingresados",
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

    static public function ctrMostrarUsuarios($item, $valor)
    {
        $tabla = "usuarios";
        $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

        return $respuesta;
    }
}
