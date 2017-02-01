<?php

class Admin extends Controller {

	public function __construct(){
		
	}

    public function index() {
        echo 'AdminController->index() <br/>';
    }

    public function test($name = '', $age = 0) {
        echo 'AdminController->test() <br/>';
        echo "Name: $name, Age: $age";
    }
}