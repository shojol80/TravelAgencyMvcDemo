<?php
	
	//Main model

	class Dmodel{

		protected $db=array();

		public function __construct(){

			$dsn= 'mysql:dbname=tour;host=localhost';
			$user='root';
			$password='';

			$this->db=new Database($dsn,$user,$password);


		}
	}
?>
