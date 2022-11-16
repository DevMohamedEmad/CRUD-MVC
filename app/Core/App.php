<?php

/* Frontend Controller */

class App {
    
    protected $controller = "HomeController";
    protected $method = "index";
    protected $params= [];

    public function __construct(){
        $this->prepareURL();
        $this->render();
    }

    private function prepareURL(){
        $request = substr( $_SERVER["QUERY_STRING"],10) ;
        if(!empty($request)){
            $url = trim($request, "/");
            $url = explode("/",$url);
            // define The Controller
            $this->controller = (isset($url[0])) ? ucwords($url[0])."Controller":"HomeController";
            // define The Action
            $this->method = (isset($url[1])) ? $url[1]:"index";
            // define The Params
            unset($url[0],$url[1]);
            $this->params = (!empty($url)) ? array_values($url) : [];

        }
    }
    private function render(){
        if(class_exists($this->controller)){
           $controller = new $this->controller;
           if(method_exists($controller,$this->method)){
           call_user_func_array([$controller ,$this->method],$this->params);
           }
           else {
              echo "Method : $this->method Not Exist";
           }
        }
        else {
            echo "This Controller : $this->controller Not Exist";
        }
    }
}

?>