<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('last_name',191);
            $table->string('first_name', 255);
            $table->string('email', 191);
            $table->string('avatar', 500);
            $table->string('password', 500);
            $table->string('job_title', 255);
            $table->string('department',255);
            $table->integer('manager_id');
            $table->string('phone',25);
            $table->string('address1', 500);
            $table->string('address2',500);
            $table->string('city', 255);
            $table->string('state', 255);
            $table->string('postal_code', 15);
            $table->string('country', 255);
            $table->string('remember_token',255);
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
