<?php 

require_once 'conexion/Conexion.php';
require_once 'controller/Tbltipodocumento_controller.php';
require_once 'controller/Tblestudiantes_controller.php';
require_once 'controller/Sistema_controller.php';


$web = new Sistema_controller();
$web->inicio();



?>