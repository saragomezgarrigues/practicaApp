<?php
	function showTemplate($controller,$view){
		//Cargamos toda la plantilla que hemos creado para la aplicación.
		$controller->load->view('templates/head');
		$controller->load->view('templates/header');
		$controller->load->view('templates/menu');
		$controller->load->view('templates/footer');
		$controller->load->view('templates/end');
	}//showTemplate
	
	function onlyBootstrap($controller,$view){
		//En la página de incio sólo necesitaré bootstrap, por lo que los tendré que cargar :)
		$controller->load->view('templates/head');
		$controller->load->view($view);
	}//onlyBootstrap
	
?>