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
            $table->unsignedBigInteger('id', true);
            $table->string('email', 100);
            $table->string('password', 64);
            $table->string('phone', 10);
            $table->string('rol', 14);
            $table->unsignedTinyInteger('active')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->unique('email', 'users_email_unique');
            $table->unique('phone', 'user_phone_unique');
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
