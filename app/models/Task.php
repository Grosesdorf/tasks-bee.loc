<?php

class Task extends Model{

    public function get(){
    	$db = $this->db();

    	if($db){
       		$results = $db->query("SELECT * FROM Tasks;", PDO::FETCH_ASSOC);
       		$data = $results->fetchAll();
       		return $data;
        }else{
            die("Hana!");
        }
    }

    public function add(){
      echo "db";
      $db = $this->db();

      if($db){
          // date_default_timezone_set("UTC");
          // date_default_timezone_set('Europe/Moscow');
          // $dataAdd = date("Y-m-d H:i:s");
          $db->query("INSERT INTO Tasks 
              (name, email, text_task, path_image, completed, date_create) 
              VALUES 
              ('temp', 'temp@temp.com', 'temp', 'img', 0, '11-11-11');");
        }else{
            die("Hana!");
        }
    }
}
