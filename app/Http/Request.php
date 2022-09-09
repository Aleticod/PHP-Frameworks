<?php 

namespace App\Http;

class Request {
    protected $segments = [];
    protected $controller;
    protected $method;

    public function __construct() {
        // https://platzi.com/servicios/index

        $this->segments = explode('/', $_SERVER['REQUEST_URI']);
        
        var_dump($_SERVER['REQUEST_URI']);
        echo "<br>";
        var_dump($this->segments);

        $this->setController();
        $this->setMethod();
    }

    public function setController() {
        $this->controller = empty($this->segments[1]) 
            ? 'home' 
            : $this->segments[1];
    }

    public function setMethod() {
        $this->method = empty($this->segments[2]) 
            ? 'index' 
            : $this->segments[2];
    }
}