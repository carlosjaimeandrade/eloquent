<?php

namespace Src\help;


class Routes
{

    public function clearUrl()
    {
        $uri =
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $bar = substr($uri, -1);

        $base = explode("/", $uri);
        $base = array_values(array_filter($base));

        if(count( $base)>1){
            if ($bar == "/") {
                $uri = rtrim($uri, '/');
                header('Location:' . $uri);
                exit();
            }
        }

        if (count($base) == 3) {
            $metodo = $base[2];
            if ($metodo != "") {
                $metodo = $metodo;
            } else {
                $metodo = "index";
            }
        } else {
            $metodo = "index";
        }

        if (count($base) >= 2) {
            $controller =  $base[1];
        } else {
            $controller = 'home';
        }

        $controller = ucwords($controller);

        return ['controller' => $controller, 'metodo' => $metodo];
    }

    public function render()
    {

        $rotas = $this->clearUrl();
        $controller =   $rotas['controller'];
        $metodo =   $rotas['metodo'];

        if (file_exists(CONTROLLER_PATH . "/{$controller}.php")) {
            require_once(CONTROLLER_PATH . "/{$controller}.php");
        }


        $class = "\\src\\Controllers\\" . $controller;


        if (class_exists($class)) {
            $active = new $class;
        } else {
            echo "pagina não encontrada";
            exit();
        }

        if (method_exists($active, $metodo)) {
            $active->$metodo();
        } else {
            echo "pagina não encontrada";
        }
    }
}
