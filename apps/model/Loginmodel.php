<?php
	
//log in model

	class Loginmodel extends Dmodel{


		public function __construct(){

			parent:: __construct();
		}

		public function usercontrol($table,$email,$password){

			$sql="select * from $table where email=? and password=?";

			return $this->db->affectedrows($sql,$email,$password);
		}


		public function insertuser($table,$data){

			return $this->db->insert($table,$data);
		}


		public function getuserdata($table,$email,$password){

			$sql="select * from $table where email=? and password=?";

			return $this->db->selectuser($sql,$email,$password);
		}
	}

?>