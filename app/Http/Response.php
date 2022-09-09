<?php

namespace App\Http;

class Response {
    protected $view; // array, json, pdf, etc

    public function __construct($view) {
        $this->view = $view; // home, contact, services
    }

    public function getView () {
        return $this->view;
    }

    public function send() {
        $view = $this->getView();
        // home
        $content = file_get_contents(__DIR__ . "/../../$view.php");

        require_once __DIR__ . "/../../layout.php";
    }
}