<?php
		
		//Index controller

class Index extends Dcontroller{

	public function __construct(){

		parent:: __construct();
	}

	public function index(){

		$this->home();
	}

	public function home(){

		$this->load->view('home');

	}


	
}

?>