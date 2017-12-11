

<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
	spl_autoload_register(function($class){

		include_once "system/libs/".$class.".php";
	});

	include_once "apps/config/config.php";

	/*include_once "system/libs/Main.php";

	include_once "system/libs/Dcontroller.php";

	include_once "system/libs/Load.php";

	include_once "system/libs/Dmodel.php";

	include_once "system/libs/Database.php";*/

	$main=new Main();

	

	/*$url=isset($_GET['url'])?$_GET['url'] : NULL;

	if($url!=NULL){

		$url=rtrim($url, '/');

	    $url=explode('/', filter_var($url, FILTER_SANITIZE_URL));

	}

	else{

		unset($url);
	}

	

	if (isset($url[0])){

		include_once 'apps/controller/'.$url[0].'.php';

		$raihan=new $url[0]();

		if(isset($url[2])){

			$raihan->{$url[1]}($url[2]);


		}

		else{

			if(isset($url[1])){

				$raihan->{$url[1]}();
			}
		}

	}

	

	else{

		include_once 'apps/controller/Index.php';

		$index=new Index();

		$index->home();
	}*/

	

	

	



?>















