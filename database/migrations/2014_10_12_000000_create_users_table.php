<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name', 44);
            $table->string('last_name', 44);
            $table->string('second_last_name', 44);
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('key_one');            
            $table->string('key_two', 18);            
            $table->unsignedBigInteger('phone');
            $table->string('street', 44);
            $table->string('suburb', 44);
            $table->string('outdoor_number', 44);
            $table->string('avatar')->nullable();
            $table->string('interior_number', 44)->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->string('campo1', 44)->nullable();
            $table->string('campo2', 44)->nullable();
            $table->string('campo3', 44)->nullable();
            $table->string('campo4', 44)->nullable();
            $table->string('campo5', 44)->nullable();
            $table->string('campo6', 44)->nullable();
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
