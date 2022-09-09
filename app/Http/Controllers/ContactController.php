<?php 

namespace App\Http\Controllers;

class ContactController {
    public function index() {
        $view = 'contact';
        //return new \App\Http\Response($view);
        return view($view); // Helper view()
    }
}