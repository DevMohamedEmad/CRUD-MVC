<?php


class Product extends Model{

    private $table = "products";
    private $connect;
    public function __construct(){
       $this->connect = $this->connect();
      
    }

    public function getProducts(){
        $products =  $this->connect->get($this->table); 
        return  $products ;
    }

    public function insertProduct($data){
        return  $this->connect->insert($this->table,$data);
    }

    public function deleteProduct($id){
       $row = $this->connect->where('id',$id);
       return $row->delete($this->table);
    }

    public function getRow($id){
       $row = $this->connect->where('id',$id);
       return $row->getOne($this->table);
    }

    public function updateProduct($id , $data){
        $row = $this->connect->where('id',$id);
        return $row->update($this->table ,$data);
    } 
}










?>