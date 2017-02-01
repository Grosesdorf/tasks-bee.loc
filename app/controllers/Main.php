<?php

class Main extends Controller {
    public function index($name = '!!!', $age = 0){
        $task = $this->task('Task');
        $db = $task->db();
        
        if($db){
            $db = "TRUE";
        }
        
        $data = ['db' => $db,
                ];
        
        $view = $this->view('main/index', $data);
    }
}
