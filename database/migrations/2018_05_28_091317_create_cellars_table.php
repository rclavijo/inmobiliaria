<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCellarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cellars', function (Blueprint $table) {
            $table->unsignedBigInteger('property_id', true);
            $table->unsignedInteger('office_meters');
            $table->unsignedInteger('cellar_meters');
            $table->unsignedInteger('bathroom_meters');
            $table->unsignedTinyInteger('reinforced_floor');
            $table->string('entry_type', 10);
            $table->unsignedTinyInteger('height');
            $table->timestamps();
            $table->foreign('property_id', 'cellars_property_id_fk')
                ->references('id')
                ->on('properties')
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
        Schema::dropIfExists('cellars');
    }
}
