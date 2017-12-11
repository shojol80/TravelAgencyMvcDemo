<?php
	
//tours controller

class Tour extends Dcontroller{

	public function __construct(){

			parent:: __construct();
		}


		public function showtour(){

				$this->load->view('header');


			$table="tour";
			$postmodel=$this->load->model('Postmodel');
			$data['allpost']=$postmodel->getallpost($table);
		
				$this->load->view('alltour', $data);

				$this->load->view('footer');

              }



		
}

?>
