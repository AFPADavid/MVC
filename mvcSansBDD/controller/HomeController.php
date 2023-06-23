<?php

require_once 'model/Circle.php';

class HomeController {
    // Déclaration de la classe HomeController

    public function index() {
        // Déclaration de la méthode "index" de la classe HomeController
        

        
        // Créer un objet Circle
        $circle = new Circle(5);


        require 'view/home.php';
        // Inclut le fichier de vue "home.php"
    }
}

?>