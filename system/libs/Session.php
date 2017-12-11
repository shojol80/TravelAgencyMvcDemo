<?php
	
	//sessoin clsaa

	class Session{

		public static function init(){

			session_start();
		}



		public static function destroy(){

			session_destroy();
		}



		public static function set($key,$value){

			$_SESSION[$key]=$value;
		}





		public static function get($key){

			if(isset($_SESSION[$key])){

				return $_SESSION[$key];
			}

			else{

				return false;
			}
		}

		public static function checksession(){

			self::init();

			if(self::get('login')==false){

				self::destroy();

				header("Location:".BASE_URL."/index.php?url=Login");
			}
		}

		public static function checkusersession(){

			self::init();

			if(self::get('userlogin')==false){

				self::destroy();
//die("test");
				header("Location:".BASE_URL."/index.php?url=Userlogin");
			}
		}



	}
?>