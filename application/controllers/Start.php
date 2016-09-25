<?php
class Start extends CI_Controller{
	 function index(){
		//$this->load->view('start/index');
		onlyBootstrap($this, 'start/index');
	 }
}//Start