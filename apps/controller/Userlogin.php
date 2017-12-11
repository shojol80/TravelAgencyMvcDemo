<?php

//Log in controller

class Userlogin extends Dcontroller{

	public function __construct(){

		parent:: __construct();
	}

	public function index(){

		$this->login();
	}

	public function login(){

		Session::init();

		if(Session::get('userlogin')==true){

			header("Location:".BASE_URL."/index.php?url=User");

		}

		$this->load->view('Userlogin/login');
	}

	public function register(){

		Session::init();

		if(Session::get('userlogin')==true){

			header("Location:".BASE_URL."/index.php?url=User");

		}

		$this->load->view('Userlogin/register');
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

		Session::set('userlogin',true);

		Session::set('email', $result[0]['email']);

		Session::set('id', $result[0]['id']);

		header("Location:".BASE_URL."/index.php?url=User");
		}

		
		

		else{

			header("Location:".BASE_URL."/index.php?url=Userlogin");
		}


	}



	public function Doregister(){

		$table='user';

		$email=$_POST['email'];

		$password=md5($_POST['password']);

		$loginmodel=$this->load->model('Loginmodel');

		$count=$loginmodel->usercontrol($table,$email,$password);

		if($count>0){
echo "User Already exists";
		}

		else{

			 $data=array(

					'email'=>$email,
					'password'=>$password
				);
			$loginmodel->insertuser($table,$data);
			header("Location:".BASE_URL."/index.php?url=Userlogin");
		}


	}

















	public function logout(){

		Session::init();

		Session::destroy();

		header("Location:".BASE_URL."/index.php?url=Login/login");
	}
}

?>