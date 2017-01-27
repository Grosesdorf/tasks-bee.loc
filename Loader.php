<?php

class Loader{
	
	public function loadClases($className)
	{
		if($className == "IndexController"){
			include "/controllers/IndexController.php";
		}
	}
}