<?php
	
	//post model 

	class Postmodel extends Dmodel{

		public function __construct(){

			parent::__construct();
		}

		public function getallpost($table){

			$sql="select * from $table order by id desc limit 3";

			return $this->db->select($sql);

			
		}



			public function getpostlist($table){

			$sql="select * from $table order by id desc ";

			return $this->db->select($sql);

			
		}


			public function gettourlist($table){

			$sql="select * from $table order by id desc ";

			return $this->db->select($sql);

			
		}


		public function getpostbyid($tablepost,$id){

				$sql="select *from $tablepost where $tablepost.id=$id ";
				

			    return $this->db->select($sql);


		}


		public function getpostbycategory($table,$tablecategory,$id){

				$sql="select $table.*,$tablecategory.name from $table INNER JOIN $tablecategory

					on $table.category=$tablecategory.id

					where $tablecategory.id=$id ";
				

			    return $this->db->select($sql);



		}

		public function getalllatestpost($table){

			$sql="select * from $table order by id desc limit 3";

			return $this->db->select($sql);

		}


		public function insertpost($table,$data){

			return $this->db->insert($table,$data);
		}

		public function inserttour($table,$data){

			return $this->db->insert($table,$data);
		}


		

	}
?>
