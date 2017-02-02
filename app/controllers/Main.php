<?php

class Main extends Controller {
    public function index($name = '!!!', $age = 0){
        $task = $this->task('Task');
        $data = $task->get();

        $view = $this->view('main/index', $data);
    }

    public function create(){
        echo "string";
        $task = $this->task('Task');
        var_dump($task);
        $bbb = $task->add();
        echo $bbb;
    }
}
