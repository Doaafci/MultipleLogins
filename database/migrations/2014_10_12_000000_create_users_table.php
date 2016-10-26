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
            $table->string('email',50);
            $table->string('fname',50);
            $table->string('surname',50);
            $table->string('orchestraname',50)->nullable(true);
            $table->string('role1',10)->nullable(true);
            $table->string('role2',10)->nullable(true);
            $table->string('gender',6);
            $table->string('password');
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
        Schema::drop('users');
    }
}
