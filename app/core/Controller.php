<?php

class Controller {
    public function task($task){
        require_once __DIR__ . '/../models/' . $task . '.php';
        return new $task();
    }
    
    public function view($view = 'main/index', $data = []){
        require_once __DIR__ . '/../views/' . $view . '.php';
    }
}
