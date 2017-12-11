<?php 
	
	//Adin controller

	class Admin extends Dcontroller{

		public function __construct(){

			parent:: __construct();

			Session::checksession();

			$data=array();
		}

		public function index(){

			$this->home();
		}

		public function home(){

			$this->load->view('admin/header');

			$this->load->view('admin/navcontent');

			$this->load->view('admin/sidebar');

			$this->load->view('admin/home');
		}


		public function addcategory(){

			$this->load->view('admin/header');

			$this->load->view('admin/navcontent');

			$this->load->view('admin/sidebar');

			$this->load->view('admin/addcategory');
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

			//$url= BASE_URL."/index.php?url=Admin/categorylist?msg=" .urlencode(serialize($mdata))

			header("Location:".BASE_URL."/index.php?url=Admin/categorylist");

		     }



		public function categorylist(){

			$this->load->view('admin/header');

			$this->load->view('admin/navcontent');

			$this->load->view('admin/sidebar');

			

			$table="blogcategory";

			$catmodel=$this->load->model('catmodel');

			$data['cat']=$catmodel->catlist($table);

			$this->load->view('admin/categorylist', $data);

		    }

		    public function editcategory($id=NULL){

		    	$this->load->view('admin/header');

			   $this->load->view('admin/navcontent');

			   $this->load->view('admin/sidebar');

				$table="blogcategory";

				//$id=7;

				$catmodel=$this->load->model("catmodel");

				$data['catbyid']=$catmodel->catbyid($table,$id);

			   $this->load->view('admin/editblogcategory',$data);

		    }



		    //this is the functionality to update a category from admin 

		    public function updatecategory($id=NULL){

		   		$table="blogcategory";

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

			header("Location:".BASE_URL."/index.php?url=Admin/categorylist");

		   }






		   public function deletecategory($id=NULL){

		   		$table="blogcategory";

		     	$cond="id=$id";

		   	   $catmodel=$this->load->model('catmodel');

		   	  $result= $catmodel->catdelete($table,$cond);

		   	   $mdata=array();

			    if($result==1){

				$mdata['msg']= "category updated succesfully";
			    }

			   else{

				$mdata['msg']= "category not updated";

			  }

			header("Location:".BASE_URL."/index.php?url=Admin/categorylist");

		   }






		   public function addpost(){


		   		$this->load->view('admin/header');

			   $this->load->view('admin/navcontent');

			   $this->load->view('admin/sidebar');

			   $tableCategory="blogcategory";

			   $catmodel=$this->load->model('Catmodel');

			    $data['catlist']=$catmodel->catlist($tableCategory);

			   $this->load->view('admin/addpost',$data);

		   }



		   public function addtour(){


		   		$this->load->view('admin/header');

			   $this->load->view('admin/navcontent');

			   $this->load->view('admin/sidebar');

			   $tableCategory="blogcategory";

			   $catmodel=$this->load->model('Catmodel');

			    $data['catlist']=$catmodel->catlist($tableCategory);

			   $this->load->view('admin/addtour',$data);

		   }


		   //this is the functionality to add post in database
public function inserttour(){

		   	$table="tour";

			$title=$_POST['title'];
			$category=$_POST['select'];
			$time=$_POST['time'];
		
			$description=$_POST['description'];
	

			$permited =array('jpg','jpeg','png','gif');

			$file_name=$_FILES['image']['name'];
			
			
			
			
			//if they DID upload a file...
if($_FILES['image']['name'])
{
	
	$valid_file=true;
	
	
			$file_size=$_FILES['image']['size'];

			$file_temp=$_FILES['image']['tmp_name'];

			$div=explode('.', $file_name);

			$file_ext=strtolower(end($div));

			$unique_image=substr(md5(time()),0,10).'.'.$file_ext;	
	
	
	
	//if no errors...
	if(!$_FILES['image']['error'])
	{
		//now is the time to modify the future file name and validate the file
		$new_file_name = strtolower($_FILES['image']['tmp_name']); //rename file
		if($_FILES['image']['size'] > (99999999999999999999)) //can't be larger than 1 MB
		{
			$valid_file = false;
			$message = 'Oops!  Your file\'s size is to large.';
		}
		
		//if the file has passed the test
		if($valid_file)
		{
			//move it to where we want it to be
			move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$unique_image);
			$message = 'Congratulations!  Your file was accepted.';
		}
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['image']['error'];
	}
}

			
			
	//echo $message;	
			
		
			
			//die();



			$image='uploads/'.$unique_image;
			


			$data=array(

					'title'=>$title,
					'category'=>$category,
					'time'=>$time,
					'image'=>$image,
					'description'=>$description,
		
				);

			$Postmodel=$this->load->model('Postmodel');

			$result=$Postmodel->inserttour($table,$data);

			$mdata=array();

			if($result==1){

				$mdata['msg']= "category added succesfully";
			}

			else{

				$mdata['msg']= "category not added";

			}
			
			
			//var_dump($data);
			//die();

			//$url= BASE_URL."/index.php?url=Admin/categorylist?msg=" .urlencode(serialize($mdata))

			header("Location:".BASE_URL."/index.php?url=Admin/tourlist");



		   		 
		   	}












		   //this is the functionality to add post in database
public function insertblogpost(){

		   	$table="blogpost";

			$title=$_POST['title'];
			$category=$_POST['select'];
			$date=$_POST['date'];
		
			$description=$_POST['description'];
			$author=$_POST['author'];

			$permited =array('jpg','jpeg','png','gif');

			$file_name=$_FILES['image']['name'];
			
			
			
			
			//if they DID upload a file...
if($_FILES['image']['name'])
{
	
	$valid_file=true;
	
	
			$file_size=$_FILES['image']['size'];

			$file_temp=$_FILES['image']['tmp_name'];

			$div=explode('.', $file_name);

			$file_ext=strtolower(end($div));

			$unique_image=substr(md5(time()),0,10).'.'.$file_ext;	
	
	
	
	//if no errors...
	if(!$_FILES['image']['error'])
	{
		//now is the time to modify the future file name and validate the file
		$new_file_name = strtolower($_FILES['image']['tmp_name']); //rename file
		if($_FILES['image']['size'] > (99999999999999999999)) //can't be larger than 1 MB
		{
			$valid_file = false;
			$message = 'Oops!  Your file\'s size is to large.';
		}
		
		//if the file has passed the test
		if($valid_file)
		{
			//move it to where we want it to be
			move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$unique_image);
			$message = 'Congratulations!  Your file was accepted.';
		}
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['image']['error'];
	}
}

			
			
	//echo $message;	
			
		
			
			//die();



			$image='uploads/'.$unique_image;
			
			
			
			var_dump($image);

			$data=array(

					'title'=>$title,
					'category'=>$category,
					'date'=>$date,
					'image'=>$image,
					'description'=>$description,
					'author'=>$author
				);

			$Postmodel=$this->load->model('Postmodel');

			$result=$Postmodel->insertpost($table,$data);

			$mdata=array();

			if($result==1){

				$mdata['msg']= "category added succesfully";
			}

			else{

				$mdata['msg']= "category not added";

			}
			
			
			//var_dump($mdata);
			//die();

			//$url= BASE_URL."/index.php?url=Admin/categorylist?msg=" .urlencode(serialize($mdata))

			header("Location:".BASE_URL."/index.php?url=Admin/postlist");



		   		 
		   	}




		   	public function tourlist(){

 $tableCategory="blogcategory";
		   		$this->load->view('admin/header');

			   $this->load->view('admin/navcontent');

			   $this->load->view('admin/sidebar');

			   $tablePost="tour";


			   $postmodel=$this->load->model('Postmodel');

			    $data['listpost']=$postmodel->gettourlist($tablePost);

			    $catmodel=$this->load->model('Catmodel');

			   $data['catlist']=$catmodel->catlist($tableCategory);

			   $this->load->view('admin/tourlist',$data);


		   	}








		   	public function postlist(){


		   		$this->load->view('admin/header');

			   $this->load->view('admin/navcontent');

			   $this->load->view('admin/sidebar');

			   $tablePost="blogpost";

		        $tableCategory="blogcategory";

			   $postmodel=$this->load->model('Postmodel');

			    $data['listpost']=$postmodel->getpostlist($tablePost);

			    $catmodel=$this->load->model('catmodel');

			   $data['catlist']=$catmodel->catlist($tableCategory);

			   $this->load->view('admin/postlist',$data);


		   	}




		   	public function userinbox(){

			$this->load->view('admin/header');

			$this->load->view('admin/navcontent');

			$this->load->view('admin/sidebar');

			$this->load->view('admin/inbox');
		}





		//For tour



		public function addtourcat(){

			$this->load->view('admin/tourinfo/header');

			$this->load->view('admin/tourinfo/navcontent');

			$this->load->view('admin/tourinfo/sidebar');

			$this->load->view('admin/tourinfo/addtourcategory');
		}


		public function inserttourcategory(){

			$table="tourcategory";

			$name=$_POST['name'];
			

			$data=array(

					'name'=>$name
					
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

			//$url= BASE_URL."/index.php?url=Admin/categorylist?msg=" .urlencode(serialize($mdata))

			header("Location:".BASE_URL."/index.php?url=Admin/tourcatlist");

		}


		public function tourcatlist(){

			$this->load->view('admin/tourinfo/header');

			$this->load->view('admin/tourinfo/navcontent');

			$this->load->view('admin/tourinfo/sidebar');

			$table="tourcategory";

			$catmodel=$this->load->model('catmodel');

			$data['cat']=$catmodel->catlist($table);

			$this->load->view('admin/tourinfo/tourcategorylist', $data);
		}



		 public function edittourcat($id=NULL){

		    	$this->load->view('admin/tourinfo/header');

			   $this->load->view('admin/tourinfo/navcontent');

			   $this->load->view('admin/tourinfo/sidebar');

				$table="tourcategory";

				//$id=7;

				$catmodel=$this->load->model("catmodel");

				$data['catbyid']=$catmodel->catbyid($table,$id);

			   $this->load->view('admin/tourinfo/edittourcategory',$data);

		    }



		    //this is the functionality to update a category from admin 

		    public function updatetourcategory($id=NULL){

		   		$table="tourcategory";

		   		$name=$_POST['name'];
			    

			    $data=array(

					'name'=>$name
					
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

			header("Location:".BASE_URL."/index.php?url=Admin/tourcategorylist");

		   }




	
}

?>