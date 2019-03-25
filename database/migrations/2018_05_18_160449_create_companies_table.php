<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id', true);
            $table->string('business_name', 100);
            $table->string('nit', 13);
            $table->timestamps();
            $table->foreign('user_id', 'companies_user_id_fk')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->unique('nit', 'companies_nit_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
