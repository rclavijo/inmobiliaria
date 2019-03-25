<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id', true);
            $table->string('name', 64);
            $table->string('lastname', 64);
            $table->string('identification', 10);
            $table->timestamps();
            $table->foreign('user_id', 'persons_user_id_fk')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->unique('identification', 'persons_identification_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
