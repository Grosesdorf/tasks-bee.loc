<?php

class Router {
    
    protected $controller = 'Index';
    protected $method = 'index';
    protected $params = [];
    
    public function __construct(){
        
        $url = $this->parseURL();
        
        if (file_exists(__DIR__ . "/../controllers/" . $url[0] . ".php")){
            $this->controller = $url[0];
            unset($url[0]);
        }
        
        require_once __DIR__ . '/../controllers/' . $this->controller . ".php";

        $this->controller = new $this->controller;

        if (method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];

        // var_dump($this->controller);
        
       echo '<pre>';
       var_dump($url);
       echo '</pre>';
    }
    
    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
