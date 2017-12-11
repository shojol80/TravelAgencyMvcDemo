<?php
	
	//category controller

	class category extends Dcontroller{

		public function __construct(){

			parent:: __construct();
		}


			public function categorylist(){

			$data=array();

			$table="blogcategory";

			$catmodel=$this->load->model('catmodel');

			$data['cat']=$catmodel->catlist($table);

			$this->load->view('category', $data);

		    }



			public function catbyid(){

				$data=array();

				$table="blogcategory";

				$id=3;

				$catmodel=$this->load->model('catmodel');

				$data['catbyid']=$catmodel->catbyid($table,$id);

				$this->load->view('catbyid', $data);

			   }

			   //we can add category from view using this function

		    public function addblockcategory(){

			$this->load->view('addblockcategory');


		    }



		    public function insertblockcategory(){

			$table="blogcategory";

			$name=$_POST['name'];
			$title=$_POST['title'];

			$data=array(

					'name'=>$name,
					'title'=>$title
				);

			$catmodel=$this->load->model('catmodel');

			$result=$catmodel->insertcat($table,$data);

			$mdata=array();

			if($result==1){

				$mdata['msg']= "category added succesfully";
			}

			else{

				$mdata['msg']= "category not added";

			}

			$this->load->view('addblockcategory', $mdata);

		   }



		   //we can update category from view page usinng this function

		   public function updatecat(){

		     	$data=array();

				$table="blogcategory";

				$id=7;

				$catmodel=$this->load->model("catmodel");

				$data['catbyid']=$catmodel->catbyid($table,$id);

			   $this->load->view('updatecatt',$data);


		    }





		   public function updatecategory(){

		   		$table="blogcategory";

		   		$id  =$_POST['id'];
		   		$name=$_POST['name'];
			    $title=$_POST['title'];

			    $data=array(

					'name'=>$name,
					'title'=>$title
				);

				$cond="id=$id";

				$catmodel=$this->load->model("catmodel");

				$result=$catmodel->catupdate($table,$data,$cond);

				$mdata=array();

			    if($result==1){

				$mdata['msg']= "category updated succesfully";
			    }

			   else{

				$mdata['msg']= "category not updated";

			  }

			$this->load->view('updatecatt', $mdata);


		   }


		   public function deletecategory(){

		   	$table="blogcategory";

		   	$cond="id=2";

		   	$catmodel=$this->load->model('catmodel');

		   	$catmodel->catdelete($table,$cond);

		   }
	}
?>