<?php

require "vendor/autoload.php";
require "./bootstrap.php";
require "./src/help/config.php";

use Src\help\Routes;

$routes = new Routes();
$routes->render();

