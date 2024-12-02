<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //function up - create table------------------------
    public function up() 
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('task');
            $table->boolean('iscompleated')->default(0);
            $table->timestamps();// data added time stor automaticaly
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //function up - exsis table remove-------------------
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
