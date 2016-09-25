<?php
	function showTemplate($controller,$view){
		//Cargamos toda la plantilla que hemos creado para la aplicaci�n.
		$controller->load->view('templates/head');
		$controller->load->view('templates/header');
		$controller->load->view('templates/menu');
		$controller->load->view('templates/footer');
		$controller->load->view('templates/end');
	}//showTemplate
	
	function onlyBootstrap($controller,$view){
		//En la p�gina de incio s�lo necesitar� bootstrap, por lo que los tendr� que cargar :)
		$controller->load->view('templates/head');
		$controller->load->view($view);
	}//onlyBootstrap
	
?>