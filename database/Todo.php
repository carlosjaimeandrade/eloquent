<?php
namespace Database;

use Illuminate\Database\Capsule\Manager as Capsule;


class Todo
{
    public function up()
    {
        Capsule::schema()->create('todos', function ($table) {

            $table->increments('id');

            $table->string('todo');

            $table->timestamps();

            /*
            $table->string('description');
     
            $table->string('category');
     
            $table->integer('user_id')->unsigned();
     
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); */
        });
    }

    public function down(){
        Capsule::schema()->drop('todos');
    }
}
