<?php

	require_once('model/Tblestudiantes_model.php');
	require_once 'conexion/Conexion.php';
	require_once 'controller/Tbltipodocumento_controller.php';
	require_once 'controller/Tblestudiantes_controller.php';
	require_once 'controller/Sistema_controller.php';

	class Sistema_controller
	{
		
		public function inicio()
		{
			include "view/template.php";
		}
		
		public function paginasController()
		{

			$controller = new Tbltipodocumento_controller();

			if(!empty($_REQUEST['accion'])){

				$metodo = $_REQUEST['accion'];
			
				if(method_exists($controller, $metodo)){
					$controller->$metodo();
				}else{
					$controller->index();
				}
			
			}

			$controller_estudiante = new Tblestudiantes_controller();

			if(!empty($_REQUEST['accionEstudiante']))
			{
				

				$metodo = $_REQUEST['accionEstudiante'];

				if(method_exists($controller_estudiante, $metodo))
				{
					$controller_estudiante->$metodo();
				}
				else
				{
					$controller_estudiante->index();
				}
			}
			if (empty($_POST['accionEstudiante']) && empty($_POST['accion'])) 
			{
				include "view/inicio.php";	
			}
		}
		
	}



?>