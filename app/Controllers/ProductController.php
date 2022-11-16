<?php

class ProductController {

    public function index(){
    $object = new Product;
    $data["products"]= $object->getProducts();
    View::load("product/index",$data);
}
    public function add(){
    View::load("product/add");
    }

    public function store(){
       if(isset($_POST["submit"])){
          $data=[
             "name" => $_POST["name"],
             "qty"  => $_POST["qty"],
             "price"  => $_POST["price"],
             "description"  => $_POST["description"]
               ];
          $object = new Product;
          $result= $object->insertProduct($data);
          if($result){
            View::load("product/add",["success"=>"Product Created Successfully"]);
            }else {
                View::load("product/add",["fail"=>"Product Not Created"]);
            }   
        }else {
            View::load("product/add",["fail"=>"Enter Valid Data"]);
        }
    }
    public function edit($id){

        $object = new Product;
        $data = $object->getRow($id);
        if($data){
            View::load("product/edit",["data" => $data]);
        }
    }

    public function update($id){
        if(isset($_POST["submit"])){
           $data=[
              "name" => $_POST["name"],
              "qty"  => $_POST["qty"],
              "price"  => $_POST["price"],
              "description"  => $_POST["description"]
                ];
           $object = new Product;
           $result= $object->updateProduct($id,$data);
           if($result){
              $data["products"]= $object->getProducts();
              View::load("product/index",$data);
            }else {
                 View::load("product/add",["fail"=>"Product Not Created"]);
             }   
         }else {
             View::load("product/add",["fail"=>"Enter Valid Data"]);
         }
        }
    public function delete($id){
        $object = new Product;
        $result = $object->deleteProduct($id);
        if($result){
            $data["products"]= $object->getProducts();
            View::load("product/index",$data);
        }else {
            View::load("product/index",["error" => "Product Not Deleted"]);
        }
        
    }
}
?>