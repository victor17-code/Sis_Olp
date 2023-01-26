<?php
require_once 'controladores/plantilla.controlador.php';
require_once 'controladores/sectores.controlador.php';
require_once 'controladores/accionistas.controlador.php';
require_once 'controladores/usuarios.controlador.php';



require_once 'modelos/sectores.modelo.php';
require_once 'modelos/accionistas.modelo.php';
require_once 'modelos/usuarios.modelo.php';

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();

?>