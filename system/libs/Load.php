<?php
	
	class Load{

		public function __construct(){


		}

		public function view($filename,$data=false){

			if($data==true){

				extract($data);
			}

			include 'apps/newview/'.$filename.'.php';
		}

		public function model($modelname){

			include 'apps/model/'.$modelname.'.php';

			return new $modelname();

		}
	}
?>
