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
}
