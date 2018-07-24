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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('residential_address');
            $table->integer('phone_number');
            $table->string('avatar')->default('default.jpg');
            $table->string('idcard_image')->default('default.jpg');
            $table->string('bank_name');
            $table->string('account_type');
            $table->string('account_name');
            $table->integer('account_number');
            $table->string('monthly_amount');
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
        Schema::dropIfExists('users');
    }
}
