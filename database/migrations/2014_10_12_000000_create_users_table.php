<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('name');
            //$table->string('email')->unique();
            $table->string('cpf')->unique();
            $table->string('endereço');
            $table->string('filme')->nullable()->default(null);
            $table->string('password');
            $table->boolean('is_adm')->default(false);
            $table->boolean('is_sec')->default(false);
            $table->boolean('is_prof')->default(false);
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
};
