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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_position')->nullable();
            $table->string('company_location')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('ae_address')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('baccount_name')->nullable();
            $table->integer('baccount_no')->nullable();
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
