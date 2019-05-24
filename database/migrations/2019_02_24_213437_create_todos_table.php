<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('todos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid')->unsigned();
            $table->integer('lid')->nullable()->unsigned();
            $table->string('title');
            $table->text('content');
            $table->date('up_to');
            $table->timestamps();

            $table->foreign('uid', 'todos_uid')->references('id')->on('users');
            $table->foreign('lid', 'todo_lists_id')->references('id')->on('todo_lists');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('todos');
    }
}
