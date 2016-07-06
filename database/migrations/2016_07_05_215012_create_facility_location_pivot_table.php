<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilityLocationPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facility_location', function (Blueprint $table) {
            // Relations
            $table->integer('facility_id')->unsigned();
            $table->integer('location_id')->unsigned();

            // Foreign Keys
            $table->foreign('facility_id')->references('id')->on('facilities')->onDelete('cascade');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('facility_location');
    }
}
