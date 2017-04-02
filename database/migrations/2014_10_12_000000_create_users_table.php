<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password',60);
            $table->boolean('admin')->default(false);
=======
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
>>>>>>> 62b71409d51b83f4e613c7b4ee82957755355d7f
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
        Schema::drop('users');
=======
        Schema::dropIfExists('users');
>>>>>>> 62b71409d51b83f4e613c7b4ee82957755355d7f
    }
}
