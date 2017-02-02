<?php

class Main extends Controller {
    public function index($name = '!!!', $age = 0){
        $task = $this->task('Task');
        $data = $task->get();
        
        $view = $this->view('main/index', $data);
    }
}
