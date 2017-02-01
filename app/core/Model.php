<?php

class Model {
    public function db() {
        return $db = new PDO('sqlite:'.__DIR__.'/../db/db-bee.db');
    }
}
    
    

