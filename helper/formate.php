<?php
	
	class Formate{

		public function formatedate(){

			return date('F j,Y,g:i a',strtotime($date));
		}
	}

?>