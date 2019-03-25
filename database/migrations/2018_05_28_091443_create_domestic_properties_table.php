<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomesticPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domestic_properties', function (Blueprint $table) {
            $table->unsignedBigInteger('property_id', true);
            $table->unsignedTinyInteger('bathrooms_number');
            $table->unsignedTinyInteger('bedrooms_number');
            $table->unsignedTinyInteger('garages_number');
            $table->timestamps();
            $table->foreign('property_id', 'domestic_properties_property_id_fk')
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
        Schema::dropIfExists('domestic_properties');
    }
}
