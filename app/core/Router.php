<?php

class Router {
    
    protected $controller = 'main';
    protected $method = 'index';
    protected $params = [];
    
    public function __construct(){
        
        $url = $this->parseURL();

        if (file_exists(__DIR__ . "/../controllers/" . ucfirst($url[0]) . ".php")){
            $this->controller = $url[0];
            unset($url[0]);
        }
        
        require_once __DIR__ . '/../controllers/' . ucfirst($this->controller) . ".php";

        $this->controller = new $this->controller;

        if (method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);

       // echo '<pre>';
       // var_dump($url);
       // echo '</pre>';
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
