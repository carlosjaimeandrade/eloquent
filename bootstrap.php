<?php


use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([

   "driver" => "mysql",

   "host" =>"localhost",

   "database" => "acl",

   "username" => "root",

   "password" => "",

   'charset' => "utf8",

   'collation' => "utf8_general_ci",

]);

$capsule->setAsGlobal();

$capsule->bootEloquent();

date_default_timezone_set('america/sao_paulo'); 