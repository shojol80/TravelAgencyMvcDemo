<?php 
	

	//contact us controller

	class Contactus extends Dcontroller{


		public function __construct(){

		parent:: __construct();
	}


	public function insertcontact(){


		$table="contact";

			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$mail=$_POST['mail'];
			$message=$_POST['message'];




			$data=array(

					'fname'=>$fname,
					'lname'=>$lname,
					'mail'=>$mail,
					'message'=>$message
				);

			$postmodel=$this->load->model('Postmodel');

			$postmodel->insertpost($table,$data);


			

			//$url= BASE_URL."/index.php?url=Admin/categorylist?msg=" .urlencode(serialize($mdata))

			//header("Location:".BASE_URL."/index.php?url=Admin/categorylist");

		     }




		    

	}

	

?>