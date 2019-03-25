<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true);
            $table->uuid('code');
            $table->string('state', 13);
            $table->unsignedInteger('area');
            $table->string('type', 17);
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            
            $table->foreign('user_id', 'properties_user_id_fk')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
