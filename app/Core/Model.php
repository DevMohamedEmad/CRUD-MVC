<?php

require_once (LIBS.'DB/MysqliDb.php');

class Model {

    protected $db ;
    public function connect(){
        $conn = new MysqliDb (HOST, USER, PASSWORD, DBNAME);
        if($conn){
            $this->db = $conn;
            return $this->db;
        }else {
            echo "error";
        }
    }
}













?>