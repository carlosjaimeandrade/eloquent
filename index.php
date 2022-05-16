<?php
require "bootstrap.php";

use Src\Models\Todo;

use Database\Todo as TodoDataBase;

/* $todo = new TodoDataBase();
$todo->up(); 
*/  

$user = Todo::Create(['todo' => "Ahmed Khan"]);

/* $user = Todo::all()->where('todo', 'Paris to London'); */

$user = Todo::all();

var_dump($user);

$user2 = Todo::find(1);

var_dump($user2);   

/* $user2->delete(); */
/* Todo::destroy(2, 3); */

/* $user3 = Todo::find(4);
 
$user3->todo = 'Paris to London';
 
$user3->save(); */