<?php

namespace Src\controllers;

use Src\help\Loader;

class Home extends loader{

    public function index(){
        
        $this->loadTemplateView('home');
    }

    public function teste(){
        $this->loadTemplateView('home');
    }
}