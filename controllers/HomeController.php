<?php 


class HomeController {

    public function defaultAction()
    {
        return new View('home', ['titulo' => 'Clase 2']);
    }

}