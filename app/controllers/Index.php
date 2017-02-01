<?php

class Index extends Controller {

	public function __construct(){
		echo 'Consrtruct IndexController<br/>';
	}

    public function index() {
        echo 'IndexController->index() <br/>';
    }

    public function test() {
        echo 'IndexController->test() <br/>';
    }
}
