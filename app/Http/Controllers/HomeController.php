<?php 

namespace App\Http\Controllers;
use App\Http\Response;

class HomeController {
    public function index() {
        $view = 'home';
        //return new \App\Http\Response($view);
        return new Response($view);
    }
}