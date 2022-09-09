<?php 

namespace App\Http\Controllers;
use App\Http\Response;

class ContactController {
    public function index() {
        $view = 'contact';
        //return new \App\Http\Response($view);
        return new Response($view);
    }
}