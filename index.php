<?php

use Controller\IndexController; 

// echo phpinfo();

// include "Loader.php";

// $loader = new Loader();

// spl_autoload_register([$loader, 'loadClases']);

$newController = new IndexController();

echo $newController->testAction();