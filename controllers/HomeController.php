<?php 


class HomeController {

    public function defaultAction()
    {
         new View('home', ['titulo' => 'Clase 2']);
    }

}