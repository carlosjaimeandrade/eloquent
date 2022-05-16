<?php

namespace Src\controllers;

use Src\help\Loader;

class Todo extends loader{

    public function index(){
        
        $this->loadTemplateView('usuario/todo');
    }

}