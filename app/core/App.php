<?php

class App{

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function parseUrl(){
        // dump(trim($_GET['url'],'/'));
        // dump(filter_var(trim($_GET['url'],'/'),FILTER_SANITIZE_URL));
        // dump(explode('/',filter_var($_GET['url'],FILTER_SANITIZE_URL)));
        return isset($_GET['url']) ? explode('/',filter_var(trim($_GET['url'],'/'),FILTER_SANITIZE_URL)) : [];
    }

    public function __construct()
    {

        $url = $this->parseUrl();

        if (isset($url[0]) && file_exists('app/controllers/'.ucwords($url[0]).'Controller.php')) {
            $this->controller = ucwords($url[0]).'Controller';
            unset($url[0]);
        }
        
        require_once 'app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        if(isset($url[1]) && method_exists($this->controller,$url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        $this->params = array_values($url);

        call_user_func_array([$this->controller,$this->method],$this->params);

    }

}