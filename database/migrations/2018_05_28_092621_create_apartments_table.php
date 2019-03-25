<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->unsignedBigInteger('domestic_property_id', true);
            $table->unsignedTinyInteger('poll')->default(0);
            $table->unsignedTinyInteger('elevator')->default(0);
            $table->unsignedTinyInteger('parking_lot')->default(0);
            $table->unsignedTinyInteger('fourth_useful')->default(0);
            $table->unsignedInteger('administration_price');
            $table->timestamps();
            $table->foreign('domestic_property_id', 'apartments_domestic_property_id_fk')
                ->references('property_id')
                ->on('domestic_properties')
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
        Schema::dropIfExists('apartments');
    }
}
