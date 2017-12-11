<?php
	
	//this a controller that maintain all page that we see

	class Showpage extends Dcontroller{

		public function __construct(){

			parent:: __construct();
		}


		


		public function showtravelblog(){
			$this->load->view('header');
		  	$data=array();
			$table="blogpost";
			$postmodel=$this->load->model('Postmodel');
			$data['allpost']=$postmodel->getallpost($table);
			$tablecategory="blogcategory";
			$catmodel=$this->load->model('Catmodel');
			$data['catlist']=$catmodel->catlist($tablecategory);
			$data['latestpost']=$postmodel->getalllatestpost($table);
			$this->load->view('blogcontent', $data);
			$this->load->view('footer');
	}

	public function postdetails($id){




		    $data=array();

		    $table="blogpost";

		    $tablecategory="blogcategory";

			$postmodel=$this->load->model('Postmodel');

			$data['postbyid']=$postmodel->getpostbyid($table,$id);


		


			$catmodel=$this->load->model('Catmodel');

			$data['catlist']=$catmodel->catlist($tablecategory);



			

			$this->load->view('blogpostdetails',$data);


	}





	

	public function showpostbycat($id){

		$this->load->view('header');

		    $data=array();

		    $table="blogpost";

		    $tablecategory="blogcategory";

			$postmodel=$this->load->model('Postmodel');

			$data['postid']=$postmodel->getpostbycategory($table,$tablecategory,$id);


			$this->load->view('postbycategory',$data);

			
			

			$catmodel=$this->load->model('catmodel');

			$data['catlist']=$catmodel->catlist($tablecategory);

			$data['latestpost']=$postmodel->getalllatestpost($table);

			$this->load->view('sidebar',$data);

			$this->load->view('footer');


	}

	

		public function showcontact(){

		$this->load->view('contact');

	}

}	

?>