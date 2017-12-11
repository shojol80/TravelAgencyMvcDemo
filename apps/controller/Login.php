<?php

//Log in controller

class Login extends Dcontroller{

	public function __construct(){

		parent:: __construct();
	}

	public function index(){

		$this->login();
	}

	public function login(){

		Session::init();

		if(Session::get('login')==true){

			header("Location:".BASE_URL."/index.php?url=Admin");

		}

		$this->load->view('Login/login');
	}





	public function loginAuth(){

		$table='user';

		$email=$_POST['email'];

		$password=md5($_POST['password']);

		$loginmodel=$this->load->model('Loginmodel');

		$count=$loginmodel->usercontrol($table,$email,$password);

		if($count>0){

		$result= $loginmodel->getuserdata($table,$email,$password);

		Session::init();

		Session::set('login',true);

		Session::set('email', $result[0]['email']);

		Session::set('id', $result[0]['id']);

		header("Location:".BASE_URL."/index.php?url=Admin");
		}

		
		

		else{

			header("Location:".BASE_URL."/index.php?url=Login");
		}


	}



	public function logout(){

		Session::init();

		Session::destroy();

		header("Location:".BASE_URL."/index.php?url=Login/login");
	}
}

?>