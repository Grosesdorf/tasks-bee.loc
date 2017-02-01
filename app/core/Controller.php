<?php

class Controller {
    public function task($task){
        require_once '/../models/' . $task . '.php';
        return new $task();
    }
    
    public function view($view = 'main/index', $data = []){
        require_once '/../views/' . $view . '.php';
    }
}
